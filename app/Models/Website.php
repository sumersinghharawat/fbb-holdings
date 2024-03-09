<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'websitename', 'websiteemail', 'websitecontact', 'websitetiming', 'websitelocation', 'websitelocationiframe', 'websitelogo', 'websitefav', 'websitelogofooter', 'websitefacebook', 'websitetwitter', 'websiteinstagram', 'websiteyoutube', 'globe_locations'
    ];
}
