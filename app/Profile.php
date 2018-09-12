<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'institution',
        'description',
        'phone_number',
        'image_path',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function testimonials(){
        return $this->hasMany('App\Testmonial');
    }

}
