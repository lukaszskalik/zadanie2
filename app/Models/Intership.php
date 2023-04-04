<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intership extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'start_date',
        'end_date',
        'applicant_id'
    ];

    public function applicant()
    {
        return $this->belongsTo('App\Models\Applicant');
    }

}
