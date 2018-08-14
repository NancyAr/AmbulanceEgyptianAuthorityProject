<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUserHospitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__hospitals', function (Blueprint $table) {
            $table->integer('userId')->unsigned();
            $table->integer('hospitalId')->unsigned();          
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('hospitalId')->references('id')->on('hospitals');
            $table->primary(array('userId', 'hospitalId'));
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__hospitals');
    }
}