<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function assigned_police() {
        return $this->belongsTo(User::class, 'assigned_police_id');
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
}
