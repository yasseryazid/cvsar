<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhatsNew extends Model
{
    use HasFactory;
    protected $table = 'whats_new';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
