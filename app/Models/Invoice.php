<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Invoice extends Model
{
    protected $connection = 'mongodb';
    use HasFactory;
    protected $fillable = [
        'address',
        'country',
        'phone'
    ];
}
