<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'cpu', 'ram', 'storage', 'invoice', 'price', 'purchased_on'];
    //protected $table = 'hardware';
}
