<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    public $fillable = ['NationalID'];

    public function patient_inquiries()
    {
        return $this->hasMany('App\patient_inquiries');
    }
    public function inquiry_answers() 
    {
        
        return $this->hasMany('App\inquiry_answers');
    }
}
