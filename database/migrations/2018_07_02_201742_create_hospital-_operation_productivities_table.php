<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateHospitalOperationProductivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital-_operation_productivities', function (Blueprint $table) {
            $table->string('Operation');
            $table->integer('Productivity');
            $table->integer('Hospitalid')->unsigned();            
            $table->timestamps();
            $table->foreign('Hospitalid')->references('id')->on('hospitals');
            $table->primary(array('Hospitalid', 'Operation'));
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital-_operation_productivities');
    }
}