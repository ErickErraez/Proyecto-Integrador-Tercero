<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


class Group extends Model 
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameGroup', 'photo','date',
    ];
    function GroupPerson(){
        return $this->belongsTo('App\Person');
    }
   
}
