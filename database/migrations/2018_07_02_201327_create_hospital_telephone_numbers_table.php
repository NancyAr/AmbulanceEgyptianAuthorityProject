<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateHospitalTelephoneNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_telephone_numbers', function (Blueprint $table) {
            $table->bigInteger('Telephone_Number');
            $table->integer('Hospitalid')->unsigned();
            $table->timestamps();
            
            $table->foreign('Hospitalid')->references('id')->on('hospitals');
            $table->primary(array('Hospitalid', 'Telephone_Number'));
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_telephone_numbers');
    }
}