<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Police;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'location',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function police()
    {
        return $this->belongsTo(User::class, 'police_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'report_id');
    }

}
