<?php

use App\Services\Utilities\Specialty;
use App\Services\Utilities\Title;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('title', Title::keyNames());
            $table->string('first_name');
            $table->string('last_name');
            $table->unsignedInteger('licence');
            $table->enum('specialty', Specialty::keyNames());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
}
