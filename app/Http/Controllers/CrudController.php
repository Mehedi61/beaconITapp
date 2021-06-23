<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;



class CrudController extends Controller
{

    public function read($id)
    {

        $cachedUser = Redis::hgetall('user_'.$id);

        if ($cachedUser != null) {

            return view('redisOutput', ['data' => $cachedUser]);

            // return response()->json([
            //     'status_code' => 201,
            //     'message' => 'Fetched from redis',
            //     'data' => $cachedUser,
            // ]);
        }

        else {

            $user = Student::find($id);
            Redis::hmset("user_".$id, [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'designation' => $user->designation
            ]);

            return view('databaseOutput', ['data' => $user]);

            // return response()->json([
            //     'status_code' => 201,
            //     'message' => 'Fetched from database',
            //     'data' => $user,
            // ]);
        }
    }

    public function pagination()
    {
        $myData = new Student;
        $myAllData = $myData::paginate(1);
        return view('pagination', ['datas' => $myAllData]);
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
}


