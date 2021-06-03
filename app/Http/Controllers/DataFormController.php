<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class DataFormController extends Controller
{
    public function create(Request $request) {

        $myName = 
        $myEmail = $request->email;
        $myDesignation = $request->designation;

        $myData = new Student;
        $myData->name = $myName;
        $myData->email = $myEmail;
        $myData->designation = $myDesignation;
        $myData->save();
    }
}