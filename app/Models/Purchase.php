<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserInfo;
use App\Models\Hardware;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['invoice', 'price', 'hardware_id', 'userinfo', 'purchased_on';
   
   public function userinfo()
   {
       return $this->belongsTo(UserInfo::class);
   }
                           
    public function hardware()
    {
        return $this->hasOne(Hardware::class);
    }
}
