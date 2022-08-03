<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('course_title');
            $table->string('course_slug')->unique;
            $table->string('lesson_no');
            $table->string('rating');
            $table->string('image');
            $table->text('course_des')->nullable();
            $table->longtext('who_learn')->nullable();
            $table->longtext('what_learn')->nullable();		
            $table->string('lesson_title');
            $table->string('lesson_slug')->unique;
            $table->text('lesson_des');
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
        Schema::dropIfExists('course');
    }
};
