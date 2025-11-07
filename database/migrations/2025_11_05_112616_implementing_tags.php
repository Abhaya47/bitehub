<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create("tags", function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string("name")->unique();
            $table->string("description")->nullable();
        });

        Schema::create("restaurant_tags", function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->unsignedBigInteger("tag_id");
            $table->foreign("tag_id")->references("id")->on("tags");
            $table->unsignedBigInteger("restaurant_id");
            $table->foreign("restaurant_id")->references("id")->on("restaurants");
        });

        Schema::create("foods", function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string("name");
            $table->unsignedBigInteger("restaurant_id");
            $table->foreign("restaurant_id")->references("id")->on("restaurants");

            $table->string('image_url',255)->nullable();
        });

        Schema::create("food_tags", function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->string("name");
            $table->string("description")->nullable();
        });

        Schema::create("food_foodtags", function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->unsignedBigInteger("tag_id");
            $table->foreign("tag_id")->references("id")->on("food_tags");
            $table->unsignedBigInteger("food_id");
            $table->foreign("food_id")->references("id")->on("foods");
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('food_foodtags');
        Schema::dropIfExists('food_tags');
        Schema::dropIfExists('foods');
        Schema::dropIfExists('restaurant_tags');
        Schema::dropIfExists('tags');

    }
};
