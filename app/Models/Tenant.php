<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_name',
        'province',
        'nts_cnic',
        'address',
        'business_type',
        'business_sector',
        'business_city'
    ];
}