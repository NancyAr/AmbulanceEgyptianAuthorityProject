<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigInteger('NationalID');
            $table->string('Name',100);
            $table->integer('Age');
            $table->bigInteger('PhoneNumber')->default(0);
            $table->bigInteger('MobileNumber')->default(0);
            $table->bigInteger('InsuranceNumber')->default(0);
            $table->char('Gender');
            $table->mediumText('Comments')->nullable();
            $table->timestamps();
            $table->primary('NationalID');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}