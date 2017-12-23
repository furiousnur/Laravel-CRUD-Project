<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table='posts';
    // protected $table='profile';

    //primary key
    public $primarykey='id';

    //timestamps
    public $timestamps=true;

    public function user(){
    	return $this->belongsTO('App\User');
    }
}