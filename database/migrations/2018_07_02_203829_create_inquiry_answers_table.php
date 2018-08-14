<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateInquiryAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiry_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('AnswerdByWorkerID');
            $table->mediumText('Description');
            $table->integer('InquiryID')->unsigned();
            $table->bigInteger('PatientNationalID');
            $table->timestamps();
           
            $table->foreign('InquiryID')->references('id')->on('patient_inquiries');
            $table->foreign('PatientNationalID')->references('PatientNationalID')->on('patient_inquiries');
            
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inquiry_answers');
    }
}