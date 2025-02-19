<?php

namespace App\Services;

use App\Models\ListUnit;
use App\Models\ListData;
use App\Models\ListRole;
use App\Models\ListStatus;
use App\Models\ListPosition;
use App\Models\ListDropdown;
use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\LocationBarangay;

class DropdownClass
{  
    public function positions(){
        $data = ListPosition::with('special','administrative')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'special' => ($item->special) ? $item->special->name : '-',
                'administrative' => ($item->administrative) ? $item->administrative->name : '-'
            ];
        });
        return $data;
    }

    public function stations(){
        $data = ListDropdown::where('classification','Station')->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name.' ('.$item->others.')',
                'others' => $item->others
            ];
        });
        return $data;
    }

    public function divisions(){
        $data = ListDropdown::where('classification','Unit')->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'others' => $item->others
            ];
        });
        return $data;
    }

    public function religions(){
        $data = ListData::where('type','Religion')->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function bloods(){
        $data = ListData::where('type','Blood Type')->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function maritals(){
        $data = ListData::where('type','Marital Status')->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function employment_statuses(){
        $data = ListData::where('type','Employment Status')->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function roles(){
        $data = ListRole::where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'has_lab' => $item->has_lab
            ];
        });
        return $data;
    }

    public function regions(){
        $data = LocationRegion::all()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->region
            ];
        });
        return $data;
    }

    public function provinces($code){
        $data = LocationProvince::where('region_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function municipalities($code){
        $data = LocationMunicipality::where('province_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function barangays($code){
        $data = LocationBarangay::where('municipality_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function units($code){
        $data = ListUnit::where('unit_id',$code)->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'short' => $item->short
            ];
        });
        return $data;
    }
}
