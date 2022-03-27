<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App/Models/HWCategory;
use App/Models/Manufacturer;
use App/Models/Purchase;

class Hardware extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'hwcategory_id', 'cpu', 'ram', 'storage', 'service', 'software', 'price', 'manufacturer_id'];
    
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
}
