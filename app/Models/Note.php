<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

class Note extends Model
{
    use HasFactory;
    protected $fillable = ['note', 'purchase_id', 'service'];

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }
}
