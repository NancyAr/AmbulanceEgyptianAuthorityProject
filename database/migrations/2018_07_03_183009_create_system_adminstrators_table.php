<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateSystemAdminstratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_adminstrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Given_ID');
            $table->string('Admin_Name',100);
            $table->string('Admin_Password',50);
            $table->integer('Hospitalid')->unsigned();
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
        Schema::dropIfExists('system_adminstrators');
    }
}