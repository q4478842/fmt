<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'target', 
        'raised', 
        'title',
        'userid',
        'image_path',
        'description',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
