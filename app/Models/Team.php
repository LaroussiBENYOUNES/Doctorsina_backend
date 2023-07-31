<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name','last_name','picture', 'job_name','twitter_url','facebook_url','instagram_url','linkedin_url'
    ];
}
