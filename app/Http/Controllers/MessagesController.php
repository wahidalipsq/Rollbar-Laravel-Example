<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //

    public function submit(){

        try{
            $x = null;
            $x->foo = 5; // Null field access
            $x->bar(); // Null method call
        }catch(Exception $ex){
            echo "Caught exception";
        }
        return "SUCCESS";
    }


}
