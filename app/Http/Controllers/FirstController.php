<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{

    public function userName($name) {
        return $name;
    }

    public function sayHello() {

        $myName = userName("Mehedi");
        echo "Hello " . $myName;
    }
}
