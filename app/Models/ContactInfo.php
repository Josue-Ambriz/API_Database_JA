<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Hardware;

class ContactInfo extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['sales_name', 'sales_email', 'sales_number', 'tech_name', 'tech_email', 'tech_number'];
    protected $table = 'contactinfos';
    
    public function hardware()
    {
        return $this->hasOne(Hardware::class);
    }
}
