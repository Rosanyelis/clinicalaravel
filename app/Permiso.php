<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Permiso extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'permiso';
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
            $model->permiso_id = (string) Uuid::generate(4);
        });
    }

    public function rol()
    {
        return $this->belongsTo('App\Rol', 'rol_id', 'rol_id');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id', 'user_id')->withTimestamps();
    }
}
