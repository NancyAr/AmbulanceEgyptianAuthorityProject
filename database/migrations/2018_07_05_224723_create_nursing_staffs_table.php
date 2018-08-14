<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateNursingStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursing_staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('Hospitalid')->unsigned();
            $table->string('Profession');
            $table->boolean('currentlyAvailable');
            $table->timestamps();
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
        Schema::dropIfExists('nursing_staffs');
    }
}