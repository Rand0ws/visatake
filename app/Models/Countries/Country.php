<?php

namespace App\Models\Countries;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'slug',
        'category_id',
    ];

    public function getCategory()
    {
        return Category::find($this->category_id);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
