<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DtrController extends Controller
{
    public function index(Request $request){
        switch($request->option){
            default:
                return inertia('Modules/HumanResource/Dtrs/Index'); 
        }   
    }
}
