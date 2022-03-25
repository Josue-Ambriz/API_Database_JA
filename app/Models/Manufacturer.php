<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;
    protected $fillable = ['sales_name', 'sales_email', 'sales_number', 'tech_name', 'tech_email', 'tech_number'];
}
