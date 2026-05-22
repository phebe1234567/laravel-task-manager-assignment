<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
    'title',
    'description',
    'scheduled_date',
    'start_time',
    'reminder_time',
    'is_completed'
   ];
}
