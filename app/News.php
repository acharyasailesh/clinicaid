<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
	protected $fillable=['title','description'];
	protected $primaryKey='id';
    
    public function file(){
    	return $this->hasMany('App\File');
    }
}
