<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable = [
        'destination_id',
        'name',
        'logo',
        'description',
    ];
    public function destinations()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
    }
}
