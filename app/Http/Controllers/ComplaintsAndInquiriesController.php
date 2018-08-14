<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\patient_inquiries;
use App\Hospital;
use App\inquiry_answers;
use DB;


class ComplaintsAndInquiriesController extends Controller
{
    public $PATIENTID;
    
    public function ComplaintsAndInquiriesPage()                                           
    {                                                               
    
        return view('ComplaintsAndInquiries');
    }
  
    public function ReplyPage()                                           
    {                                                               
    
        return view('Complaints');
    }
    public function InquiriesPage()                                           
    {                                                               
    
        return view('Inquiries');
    }
    public function SubmitPage()                                           
    {                                                               
    
        return view('Submit');
    }
    
    public function PostInquiry(Request $request)
    {
        $Inquiry = new patient_inquiries();
        $Hospital = new Hospital();
        
        $Inquiry->PatientNationalID = $request['PatientID'] ;
        $Inquiry->Description = $request['Description'];
        $Inquiry->aComplaint = false;

        $Hospital->HospitalName = $request['HospitalName'];
        $Inquiry->Hospitalid = (DB::table('hospitals')->where('HospitalName','=',$Hospital->HospitalName)->first())->id;
            
        

        $Inquiry->save();
        return redirect('/Submit');
    }
    public function comment( Request $request)
    {
        $answers = new inquiry_answers();
        
        $answers->InquiryID = $request['ID'];  //In the form we ask the admin to enter the inquriy ID of the patient, 
                                             //you can change that by making a single buttong for each inqiriy,
                                             // and sent its ID upon click
        $answers->Description = $request['Description'];
        $answers->AnswerdByWorkerID = 116; //Here you should place the Admin's ID that is answering this inquiry.
        $answers->PatientNationalID =$request['NID']; //Same as InquiryID above.
            
        

        $answers->save();
        return redirect('/');

    }
    public function RepliesPage(Request $request)
    {
        $this->PATIENTID = $request['ID'];
        

        $Replies = DB::table('patient_inquiries')
                 ->join('patients','patients.NationalID','=','patient_inquiries.PatientNationalID')->where('patient_inquiries.PatientNationalID','=',$this->PATIENTID)
                  
                 ->orderBy('patient_inquiries.created_at')
                 ->select('patient_inquiries.id','patient_inquiries.Description','patient_inquiries.created_at')
                 ->get();
        $comments = DB::table('inquiry_answers')->where('inquiry_answers.PatientNationalID','=',$this->PATIENTID)    
                 ->join('patient_inquiries','patient_inquiries.id','=','inquiry_answers.InquiryID')
                 ->select('inquiry_answers.Description','inquiry_answers.PatientNationalID','inquiry_answers.InquiryID')
                 ->get();
        $HospitalName = DB::table('hospitals') 
                      ->join('patient_inquiries','patient_inquiries.Hospitalid','=','hospitals.id')->where('patient_inquiries.PatientNationalID','=',$this->PATIENTID)
                     
                      ->select('hospitals.HospitalName') 
                      ->first();

        return view('Replies')->with('Replies',$Replies)->with('comments',$comments)->with('HospitalName',$HospitalName);
     
    }

}