<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
class Pagination extends Controller
{
    public function todos{
    	$todos=todo::paginate(2);
    	return view('/todo',compact('todos'));
    }
}
