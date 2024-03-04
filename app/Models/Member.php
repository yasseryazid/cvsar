<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function documents()
    {
        return $this->hasMany(MedicalCheckupDocument::class, 'member_id', 'id');
    }

    public function isExists($medicalRecord)
    {
        return self::where('medical_record_number', $medicalRecord)
            ->first();
    }
}
