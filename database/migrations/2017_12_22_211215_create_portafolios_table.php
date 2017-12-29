<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortafoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 30);
            $table->integer('rate');
            //description of the project
            $table->longText('description');
            //developer experience
            $table->longText('developer_experience');
            $table->string('url', 50)->nullable();
            //the tools column was created with the idea to save a json with all the tools used in the project
            $table->string('tools')->nullable();
            //time worked in the project
            $table->string('time')->nullable();
            $table->string('costumer_name')->nullable();
            $table->string('costumer_feedback')->nullable();
            $table->string('date_start', 15);
            $table->string('date_end', 15);
            $table->string('work_title')->nullable();
            $table->string('project_type')->nullable();

            $table->string('images')->nullable();
            $table->string('thumbnail')->nullable();
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
        Schema::dropIfExists('portafolios');
    }
}
