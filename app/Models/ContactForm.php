<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];

    public function scopeSearch($query, $search)
    {
        if ($search !== null) {
            $search = mb_convert_kana($search, 's');
            $search_split = preg_split('/[\s]+/', $search);
            foreach ($search_split as $value) {
                $query->where('title', 'like', '%' . $value . '%');
            }
        }
    }
}
