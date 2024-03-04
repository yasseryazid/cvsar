<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explore extends Model
{
    use HasFactory;
    protected $table = 'tb_explore';

    public function detail()
    {
        return $this->hasMany(ExploreDetail::class, 'explore_id', 'id');
    }
}
