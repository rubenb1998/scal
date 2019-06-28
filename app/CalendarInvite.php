<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarInvite extends Model
{
    protected $fillable = [
        'email', 'token', 'calendar_id'
    ];
}
