<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImg extends Model
{
    use HasFactory;
    
    protected $guarded = [
        "id","created_at","updated_at"
    ];

    public function project()
    {
        # code...
        return  $this->belongsTo(project::class);

    }
}
