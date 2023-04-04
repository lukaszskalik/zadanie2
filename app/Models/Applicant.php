<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    public function files()
    {
        return $this->hasMany('App\Models\File');
    }

    public function interships()
    {
        return $this->hasMany('App\Models\Intership');
    }
}
