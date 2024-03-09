<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'brand', 'logo', 'cover', 'headimage', 'location', 'phonenumber', 'email', 'website', 'description', 'location_iframe', 'gallery', 'status'
    ];
}
