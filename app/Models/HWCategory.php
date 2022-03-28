<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardware;

class HWCategory extends Model
{
    use HasFactory;
    protected $fillable = ['type'];

    public function hardware()
    {
        return $this->hasMany(Hardware::class);
    }
}

