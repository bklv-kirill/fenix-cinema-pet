<?php

namespace App\Models;

use App\Traits\Models\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    use HasSlug;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'slug',
    ];
}
