<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;
    protected $guarded = [
        "id","created_at","updated_at"
    ];

    public function socialMedia()
    {
        return $this->hasMany(ExpertSocialWebsite::class);
    }

    public function getExpertId($idEx){

        foreach ($this->socialMedia as $onesocial) {
            if ($idEx == $onesocial->expert_id) {
                return  $onesocial->expert_id;
            }

        }


    }
}
