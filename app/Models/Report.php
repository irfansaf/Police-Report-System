<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'description',
        'image',
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
