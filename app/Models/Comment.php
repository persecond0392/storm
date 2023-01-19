<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'name', 'comment','room_key'
    ];

    protected $guarded = [
        'create_at', 'update_at'
    ];
}