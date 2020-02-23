<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	function __construct(){
		$this->models = new \App\Models\Product();	
	}
}
