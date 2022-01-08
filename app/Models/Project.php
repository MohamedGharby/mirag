<?php

namespace App\Models;

use CreateProjectImgsTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    protected $guarded = [
        "id","created_at","updated_at"
    ];

    public function projectImgs(){
       return $this->hasMany(ProjectImg::class);
    }
}
