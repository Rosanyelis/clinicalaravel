<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description'
    ];

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
