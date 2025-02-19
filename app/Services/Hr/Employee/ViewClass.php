<?php

namespace App\Services\Hr\Employee;

use App\Models\User;
use App\Models\ListData;
use App\Models\UserOrganization;
use App\Http\Resources\Hr\EmployeeResource;

class ViewClass
{
    public function counts(){
        $statuses = ListData::where('is_active',1)->where('type','Employment Status')->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'count' => UserOrganization::where('type_id',$item->id)->count()
            ];
        });
        return $statuses;
    }

    public function lists($request){
        $data = EmployeeResource::collection(
            User::with('profile','organization','information','academics','eligibilities')
            ->with('education.course','education.campus.school')
            ->with('address.region','address.province','address.municipality','address.barangay')
            ->join('user_profiles', 'user_profiles.user_id', '=', 'users.id')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('profile',function ($query) use ($keyword) {
                    $query->when($keyword, function ($query, $keyword) {
                        $query->where(\DB::raw('concat(firstname," ",lastname)'), 'LIKE', '%'.$keyword.'%')
                        ->where(\DB::raw('concat(lastname," ",firstname)'), 'LIKE', '%'.$keyword.'%');
                    });
                })
                ->orWhere('username',$keyword);
            })
            ->whereHas('organization',function ($query) use ($request) {
                $query->when($request->status, function ($query, $status) {
                    $query->where('status_id',$status);
                });
                $query->when($request->type, function ($query, $type) {
                    $query->where('type_id',$type);
                });
                $query->when($request->position, function ($query, $position) {
                    $query->where('position_id',$position);
                });
                $query->when($request->division, function ($query, $division) {
                    $query->where('division_id',$division);
                });
                $query->when($request->station, function ($query, $station) {
                    $query->where('station_id',$station);
                });
            })
            ->orderBy('user_profiles.lastname', 'ASC')
            ->paginate($request->count)
        );
        return $data;
    }
}
