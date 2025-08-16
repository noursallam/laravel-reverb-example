<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    protected $fillable = ['message'];
    protected $table = 'messages';

    // i will use this model in my event to reverb the message

    
}
