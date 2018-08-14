<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePatientInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_inquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Hospitalid')->unsigned();
            $table->mediumText('Description');
            $table->boolean('aComplaint'); 
            $table->bigInteger('PatientNationalID'); 
            $table->timestamps();
          
            $table->foreign('PatientNationalID')->references('NationalID')->on('patients');
            $table->foreign('Hospitalid')->references('id')->on('hospitals');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_inquiries');
    }
}