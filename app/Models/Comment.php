<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [
        "id","created_at","updated_at"
    ];
    public function latest()
    {
        # code...
        return $this->belongsTo(latest::class);
    }
}
