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
    protected $fillable = ['owner', 'info', 'email'];
    protected $table = 'contactinfos';
    
    public function hardware()
    {
        return $this->hasOne(Hardware::class);
    }
}
