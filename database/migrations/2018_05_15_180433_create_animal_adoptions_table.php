<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalAdoptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animal_adoptions', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('animal_type', ['feline', 'canine', 'others']);
            $table->string('name');
            $table->text('description');
            $table->enum('sex', ['male', 'female']);
            $table->text('area')->nullable();
            $table->double('area_longitude')->nullable();
            $table->double('area_latitude')->nullable();
            $table->boolean('vaccination_status')->default(0);
            $table->date('date_seized');
            $table->text('photo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animal_adoptions');
    }
}
