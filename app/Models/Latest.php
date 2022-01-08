<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    use HasFactory;
    protected $guarded = [
        "id","created_at","updated_at"
    ];

    public function latestImgs()
    {
        # code...
        return $this->hasMany(LatestImg::class);
    }
    public function comments()
    {
        # code...

        return $this->hasMany(comments::class);
    }
}
