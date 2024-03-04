<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(RoomImage::class, 'room_id', 'id');
    }

    public function cover()
    {
        return $this->hasOne(RoomImage::class, 'room_id', 'id');
    }
}
