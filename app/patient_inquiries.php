<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class patient_inquiries extends Model
{
    
    public $fillable = ['id','PatientNationalID','Description','Hospitalid','aComplaint'];

    public function hospital() 
    {
        
        return $this->belongsTo('App\Hospital');
    }
    public function inquiry_answers() 
    {
        
        return $this->hasMany('App\inquiry_answers');
    }
}