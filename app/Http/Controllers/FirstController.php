<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class FirstController extends Controller
{


    public function garbageData($email)
    {
        $data = Student::where('email', $email)->first()->id;
        return $data;
    }

    public function create(Request $request) {

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->designation = $request->designation;
        $student->save();
    }


    public function read(Request $request) {

        $email = $request->email;
        return Student::where('email', $email)->first();
    }

    public function update(Request $request) {

        $email = $request->email;
        return Student::where('email', $email)->first();
    }
}
