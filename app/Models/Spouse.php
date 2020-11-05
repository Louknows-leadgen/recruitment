<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    //
    protected $fillable = [
        'person_id',
    	'first_name',
    	'middle_name',
    	'last_name',
    	'birthday',
    	'occupation',
    	'contact_no',
    	'address'
    ];

    public function person(){
        $this->belongsTo('App\Models\Person');
    }

    //-- mutator
    public function setBirthdayAttribute($value){
        if(isset($value)){
            $date = date_create_from_format("m/d/Y",$value);
            $this->attributes['birthday'] = date_format($date,'Y-m-d');
        }else{
            $this->attributes['birthday'] = NULL;
        }
    }
}
