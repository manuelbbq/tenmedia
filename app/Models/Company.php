<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

        public function jobs()
    {
        return $this->hasMany(Jobs::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'company_users','company_id','user_id');


    }

}
