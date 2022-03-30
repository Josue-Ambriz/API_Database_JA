<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Note;

class ContactInfo extends Model
{
    use HasFactory;
    protected $table = 'contactinfos';
    protected $fillable = ['owner', 'info', 'email', 'note_id'];
    
    public function note()
    {
        return $this->belongsTo(Purchase::class);
    }
}
