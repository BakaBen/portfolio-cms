<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'description', 'category_id', 'thumbnail'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
