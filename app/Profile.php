<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // protected $table='profiles';
    

    //table name
    protected $table='profiles';
    // protected $table='profile';

    // protected $fillable= ['name', 'position', 'dept', 'location', 'interest'];

    //primary key
    public $primarykey='id';

    //timestamps
    public $timestamps=false;

    public function user(){
    	return $this->belongsTO('App\User');
}
}
