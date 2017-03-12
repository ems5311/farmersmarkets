<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFarmersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fmid')->unsigned();
            $table->string('marketName')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('otherMedia')->nullable();

            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('county')->nullable();
            $table->string('state')->nullable();
            $table->integer('zip')->unsigned()->nullable();

            $table->string('season1Date')->nullable();
            $table->string('season1Time')->nullable();
            $table->string('season2Date')->nullable();
            $table->string('season2Time')->nullable();
            $table->string('season3Date')->nullable();
            $table->string('season3Time')->nullable();
            $table->string('season4Date')->nullable();
            $table->string('season4Time')->nullable();

            $table->double('xCoordinate')->nullable();
            $table->double('yCoordinate')->nullable();

            $table->string('location')->nullable();

            $table->boolean('credit')->nullable();
            $table->boolean('wic')->nullable();
            $table->boolean('wiccash')->nullable();
            $table->boolean('sfmnp')->nullable();
            $table->boolean('snap')->nullable();
            $table->boolean('organic')->nullable();
            $table->boolean('bakedgoods')->nullable();
            $table->boolean('cheese')->nullable();
            $table->boolean('crafts')->nullable();
            $table->boolean('flowers')->nullable();
            $table->boolean('eggs')->nullable();
            $table->boolean('seafood')->nullable();
            $table->boolean('herbs')->nullable();
            $table->boolean('vegetables')->nullable();
            $table->boolean('honey')->nullable();
            $table->boolean('jams')->nullable();
            $table->boolean('maple')->nullable();
            $table->boolean('meat')->nullable();
            $table->boolean('nursery')->nullable();
            $table->boolean('nuts')->nullable();
            $table->boolean('plants')->nullable();
            $table->boolean('poultry')->nullable();
            $table->boolean('prepared')->nullable();
            $table->boolean('soap')->nullable();
            $table->boolean('trees')->nullable();
            $table->boolean('wine')->nullable();
            $table->boolean('coffee')->nullable();
            $table->boolean('beans')->nullable();
            $table->boolean('fruits')->nullable();
            $table->boolean('grains')->nullable();
            $table->boolean('juices')->nullable();
            $table->boolean('mushrooms')->nullable();
            $table->boolean('petfood')->nullable();
            $table->boolean('tofu')->nullable();
            $table->boolean('wildharvested')->nullable();

            $table->string('updateTime')->nullable();
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
        Schema::dropIfExists('farmers');
    }
}
