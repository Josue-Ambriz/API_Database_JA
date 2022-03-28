<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardware;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['note', 'hardware_id', 'service'];
}

public function hardware()
{
    return $this->belongsTo(Hardware::class);
}
