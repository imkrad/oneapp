<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index(Request $request){
        switch($request->option){
            default:
                return inertia('Modules/HumanResource/Surveys/Index'); 
        }   
    }
}
