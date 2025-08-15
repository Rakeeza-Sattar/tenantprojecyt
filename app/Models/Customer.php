<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_number',
        'business_type',
        'sector',
        'city',
        'is_filer'
    ];

    protected $casts = [
        'is_filer' => 'boolean'
    ];
}