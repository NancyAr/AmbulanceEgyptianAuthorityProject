<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    
    public $fillable = ['HospitalName','Hospitalid'];

    public function Inquiry(){
        return $this->hasMany('App\patient_inquiries');
    }
    

}
