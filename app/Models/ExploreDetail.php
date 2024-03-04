<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExploreDetail extends Model
{
    use HasFactory;
    protected $table = 'tb_detail_explore';

    public function images()
    {
        return $this->hasMany(ExploreImage::class, 'detail_explore_id', 'id');
    }
}
