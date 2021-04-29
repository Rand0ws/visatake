<?php

namespace App\Models\Countries;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $table = 'country_categories';
    protected $fillable = [
        'name'
    ];

    public function countries()
    {
        return $this->hasMany(Country::class);
    }
}
