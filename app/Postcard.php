<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postcard extends Model
{
    protected $fillable = [
        
        'message',
        'message_color',
        'background_color',

    ];
}
