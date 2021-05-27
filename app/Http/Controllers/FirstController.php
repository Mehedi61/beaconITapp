<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FirstController extends Controller
{

    // public function userName($name) {
    //     return $name;
    // }


    // public function sayHello() {

    //     $myName = $this->userName('Mehedi Hasan');
    //     echo "Hello " . $myName;

    // }

    public function addNumbers(Request $request) {

        $firstNumber = $request->get('firstNumber');
        $secondNumber = $request->get('secondNumber');

        $result = $firstNumber + $secondNumber;
        return $result;
    }
}
