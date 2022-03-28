<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HWCategory;
use App\Models\Manufacturer;
use App\Models\Purchase;
use App\Models\UserInfo;

class Hardware extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'hwcategory_id', 'cpu', 'ram', 'storage', 'software', 'price', 'manufacturer_id'];
    protected $table = 'hardwares';
    
    public function hwcategory()
    {
        return $this->belongsTo(HWCategory::class);
    }
    
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    
    public function purchase()
    {
        return $this->hasOne(Purchase::class);
    }
    
        public function userinfo()
    {
        return $this->hasMany(UserInfo::class);
        //return $this->belongsTo(UserInfo::class);
    }
}
