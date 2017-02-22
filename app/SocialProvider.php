<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProvider extends Model
{


    protected $table = 'SocialProvider';

    protected $fillable = ['provider_id','provider'];

    function user()
    {
        return $this->belongsTo(User::class);
    }

}
