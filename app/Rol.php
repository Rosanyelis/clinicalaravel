<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
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
    
    public function permisos()
    {
        return $this->hasMany('App\Permiso');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
