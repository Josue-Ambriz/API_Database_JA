<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class UserInfo extends Model
{
    protected $table = 'usersinfos';
    protected $fillable = ['first_name', 'last_name', 'email', 'phone'];
    use HasFactory;
    
    public function hardware()
    {
        return $this->belongsToMany(Hardware::class);
    }
}
