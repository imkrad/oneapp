<?php

namespace App\Services\Hr\Employee;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class SaveClass
{
    public function store($request){
        $data = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'is_active' => 1,
            'password' => Hash::make(Str::random(10))
        ]);
        if($data){
            $profile = $data->profile()->create([
                'firstname' => $request->firstname,
                'middlename' => $request->middlename,
                'lastname' => $request->lastname,
                'suffix' => $request->suffix,
                'sex' => $request->sex,
                'contact_no' => $request->contact_no,
                'birthdate' => $request->birthdate,
                'marital_id' => $request->marital_id,
                'religion_id' => $request->religion_id,
                'blood_id' => $request->blood_id,
            ]);
            if($profile){
                $organization = $data->organization()->create([
                    'status_id' => 1,
                    'type_id' => $request->type_id,
                    'position_id' => $request->position_id,
                    'division_id' => $request->division_id,
                    'station_id' => $request->station_id,
                    'unit_id' => $request->unit_id,
                ]);
                if($organization){
                    $data->myroles()->create([
                        'role_id' => 5,
                    ]);
                }
            }
        }
        return [
            'data' => $data,
            'message' => 'Employee created successfully', 
            'info' => 'You can now manage this employee’s details in the system',
        ];
    }
}
