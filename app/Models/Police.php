<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Report;

class Police extends Model
{
    use HasFactory;

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
