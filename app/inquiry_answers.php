<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inquiry_answers extends Model
{
    public $fillable = ['PatientNationalID','Description','InquiryID'];

    public function patient_inquiries()
    {
        return $this->belongsTo('App\patient_inquiries');
    }
}