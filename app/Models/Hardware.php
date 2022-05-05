<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\HWCategory;
use App\Models\Manufacturer;
use App\Models\Note;
use App\Models\UserInfo;

class Hardware extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $table = 'hardwares';
    protected $fillable = ['manufacturer_id', 'hwcategory_id', 'cpu', 'ram', 'storage', 'software', 'invoice', 'price', 'purchased_on'];
    
    public function hwcategory()
    {
        return $this->belongsTo(HWCategory::class);
    }
    
    public function manufacturer()
    {
        return $this->belongsTo(Manufacturer::class);
    }
    
    public function note()
    {
        return $this->hasMany(Purchase::class);
    }
    
    public function userinfo()
    {
        return $this->belongsToMany(UserInfo::class);
    }
}
