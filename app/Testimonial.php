<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'profile_id', 
        'image_path', 
        'description',
    ]; 

    public function profile(){
        return $this->belongsTo('App\Profile');
    }

    public function donation(){
        return $this->belongsTo('App\Donation');
    }
}
