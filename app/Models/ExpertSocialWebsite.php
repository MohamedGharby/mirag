<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpertSocialWebsite extends Model
{
    use HasFactory;
    protected $guarded = [
        "id","created_at","updated_at"
    ];

    public function Expert()
    {
        return $this->belongsTo(Expert::class);
    }
}
