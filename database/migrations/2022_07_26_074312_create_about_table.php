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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
			$table->longtext('hero_des');
			$table->longtext('hero_des_small');
			$table->string('hero_image');
			$table->string('round_first')->nullable();
			$table->string('round_second')->nullable();
			$table->string('round_third')->nullable();	
			$table->longtext('sec_card_desc_one');
			$table->longtext('sec_card_desc_two');
			$table->longtext('sec_card_desc_three');
			$table->longtext('sec_card_desc_four');
			$table->string('sec_title');
			$table->longtext('sec_des');
			$table->longtext('sec_des_small');
			$table->string('sec_image');
			$table->string('quate_title');
			$table->longtext('quate_des');
			$table->string('author_name');
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
        Schema::dropIfExists('about');
    }
};
