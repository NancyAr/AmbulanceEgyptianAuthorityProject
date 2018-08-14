<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSurgeryRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surgery_rooms', function (Blueprint $table) {
            $table->integer('RoomId');
            $table->string('Operation');
            $table->boolean('Validity_Status');
            $table->string('Validity_Status_Comment');
            $table->boolean('Availability_Status');
            $table->string('Availability_Status_Comment');
            $table->integer('Hospitalid')->unsigned();
            $table->timestamps();
            
            $table->foreign('Hospitalid')->references('id')->on('hospitals');
            $table->primary(array('RoomId', 'HospitalID'));
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surgery_rooms');
    }
}