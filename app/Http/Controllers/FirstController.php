<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{


    public function userName($name) 
    {
        return $name;
    }

    public function sayHello() {

    	//the this key-word was missing form the method
        $myName = $this-> userName("Mehedi");

        echo "Hello ".$myName ;    

    }
}
