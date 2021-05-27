<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FirstController extends Controller
{

    public function userName($name) {
        return $name;
    }


    public function sayHello() {

        $myName = $this->userName('Mehedi Hasan');
        echo "Hello " . $myName;

    }
}
