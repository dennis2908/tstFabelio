<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public $models;
	
	public function formInsert(){
		
		return view($this->models->tables.'.formInsert');
		
	}
	
	public function insertData(Request $request){
		$arr = $request->post();
		
		unset($arr['_token']);
		
		if($this->models->checkDataExists($arr)){
			return Redirect::back()->withErrors(['Data already exists']);
		}
		
		$this->models->insert($arr);
		
		return redirect()->route('product.allData');
				
	}
	
	public function allData(){
		return view($this->models->tables.'.allData')->with('data', $this->models->getAllData());
				
	}	
	
	public function getDetail($id){
		return view($this->models->tables.'.getDetail')->with('data', $this->models->getDetail($id));
				
	}

}