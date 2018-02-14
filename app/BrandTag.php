<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandTag extends Model
{
    use Notifiable;

    protected $guard = 'brand';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'brand_id','Health & Wellness', 'Music', 'Fashion', 'Sports',
        'Startups', 'Industry Specific', 'Digital Entertainment', 'Religion & Spiritual', 'Cuisine', 'Parties',
        'Performance', 'Comedy', 'Dance', 'Talent Hunt', 'Awards', 'Competition',
        'Fine Arts', 'Theatre', 'Literary Art', 'Crafts', 'Photography', 'Conferences',
        'College Festivals', 'Technologies', 'School Festivals','Fundraiser','Educational Fair',
    ];
}
