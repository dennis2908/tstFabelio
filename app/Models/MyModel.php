<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
	
	public function checkDataExists($array)
    {
	   $query = $this->select('id');
		
	   foreach($this->fillCheck as $k){
			$query = $query->where($k, $array[$k]);
	   }
	   return $query->first();
    }

}
