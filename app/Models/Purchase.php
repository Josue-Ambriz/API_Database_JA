<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserInfo;
use App\Models\Hardware;
use App\Models\Note;

class Purchase extends Model
{
    use HasFactory;
    protected $fillable = ['invoice', 'price', 'hardware_id', 'userinfo_id', 'purchased_on'];
   
   public function hardware()
    {
        return $this->belongsTo(Hardware::class);
    }
    
    public function userinfo()
   {
       return $this->belongsTo(UserInfo::class);
   }

    public function note()
    {
      return $this->hasMany(Note::class);
    }
}
