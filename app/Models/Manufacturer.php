<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hardware;

class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'sales_email', 'sales_number', 'tech_email', 'tech_number'];
}

public function hardware()
{
    return $this->hasMany(Hardware::class);
}
