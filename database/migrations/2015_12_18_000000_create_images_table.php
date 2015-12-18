<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';

            $table->bigIncrements('image_id');

            $table->string('image_name', 100);

            $table->string('image_extension', 10);

            $table->string('image_location', 200);
            // origin
            $table->integer('origin_height')
                    ->default(0);

            $table->integer('origin_width')
                    ->default(0);

            $table->integer('height')
                    ->default(0);

            $table->integer('width')
                    ->default(0);

            $table->integer('request_times')
                    ->default(0);
                    
            $table->timestamps();

            $table->tinyInteger('status')
                    ->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
