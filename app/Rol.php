<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

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

    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->rol_id = (string) Uuid::generate(4);
        });
    }
    
    public function permisos()
    {
        return $this->hasMany('App\Permiso', 'permiso_id', 'permiso_id');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id', 'user_id')->withTimestamps();
    }
}
