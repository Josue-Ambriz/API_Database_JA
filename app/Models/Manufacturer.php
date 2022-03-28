<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = ['company', 'sales_email', 'sales_number', 'tech_email', 'tech_number'];
    protected $table = 'manufacturers';
}
