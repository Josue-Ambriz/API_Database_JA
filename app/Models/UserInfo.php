<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class UserInfo extends Model
{
    protected $fillable = ['first_name','last_name', 'email', 'number'];
    use HasFactory;
    
    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }
}
