<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class CrudController extends Controller
{

    public function pagination()
    {
        $myData = new Student;
        $myAllData = $myData::paginate(1);
        return view('pagination', ['datas' =>$myAllData]);
    }

    public function create(Request $request)
    {
        $myData = new Student;
        $myData->name = $request->name;
        $myData->email = $request->email;
        $myData->designation = $request->designation;
        $myData->save();
    }


    public function readMe(Request $request)
    {
        $email = $request->email;
        return Student::where('email', $email)->first();
    }


    public function fetchForUpdate(Request $request)
    {

        $email = Student::where('email', $request->email)->first();
        return view('update', ['dataKey' => $email]);
    }


    public function update(Request $request)
    {
        $myData = Student::find($request->id);
        // dd($myData);
        $myData->name = $request->name;
        $myData->email = $request->email;
        $myData->designation = $request->designation;
        $myData->save();
    }


    public function delete($id)
    {
        $myData = Student::find($id);
        $myData->delete();
    }


    public function read(Request $request)
    {
        // $data = Student::find($id);

        $email = $request->email;
        return Student::where('email', $email)->first();
        

    }
}


