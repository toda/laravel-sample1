<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    protected $fillable = [
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];
}
