<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSurgeryReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgery_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ticket_ID');
            $table->bigInteger('patientID');
            $table->string('Operation');
            $table->date('Check_In_Date');
            $table->date('Check_Out_Date');
            $table->date('Surgery_Date');
            $table->string('Insurance_Type');
            $table->time('Operation_Room_Entry_Time')->nullable();
            $table->time('Operation_Room_Exit_Time')->nullable();
            $table->boolean('Patient_Attended_The_Operation')->nullable();
            $table->integer('Operation_Cost')->nullable();
            $table->integer('Operation_Cost_Paid_Amount')->nullable();
            $table->integer('Operation_Room_Remaining_Amount')->nullable();
            $table->integer('Hospitalid')->unsigned()->nullable();
            $table->integer('createdBy')->unsigned()->nullable();
            $table->integer('updatedBy')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('Hospitalid')->references('id')->on('hospitals');
            $table->foreign('patientID')->references('NationalID')->on('patients');
            $table->foreign('createdBy')->references('id')->on('users');
            $table->foreign('updatedBy')->references('id')->on('users');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surgery_reservations');
    }
}
