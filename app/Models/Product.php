<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends MyModel
{
    protected $fillable = [
        'prodName','prodPrice','prodDesc'
    ];
	
	public $fillCheck = [
        'prodName'
    ];
	
	public $tables = "products";
	
	public function getAllData(){
		return $this->select(['*'])->orderBy('id','DESC')->get();		
	}
	
	public function getDetail($id){
		return $this->where('id',$id)->first();		
	}
}
