<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestmentImg extends Model
{
    use HasFactory;
    protected $guarded = [
        "id","created_at","updated_at"
    ];

    public function investment()
    {
        # code...
        return $this->belongsTo(Investment::class);
    }
}
