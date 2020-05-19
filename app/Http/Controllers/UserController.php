<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function name()
    {
        //\
		return "name Page";
    }
	
	public function young(){
		echo "I`m young";
	}


}
