<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserInfo;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['note', 'hardware_id', 'service'];
}

public function userinfo()
{
    return $this->belongsTo(UserInfo::class);
}
