<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandtagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brandtags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('Health & Wellness')->default(0);
            $table->integer('Music')->default(0);
            $table->integer('Fashion')->default(0);
            $table->integer('Sports')->default(0);
            $table->integer('Startups')->default(0);
            $table->integer('Industry Specific')->default(0);
            $table->integer('Digital Entertainment')->default(0);
            $table->integer('Religion & Spiritual')->default(0);
            $table->integer('Cuisine')->default(0);
            $table->integer('Parties')->default(0);
            $table->integer('Performance')->default(0);
            $table->integer('Comedy')->default(0);
            $table->integer('Dance')->default(0);
            $table->integer('Talent Hunt')->default(0);
            $table->integer('Awards')->default(0);
            $table->integer('Competition')->default(0);
            $table->integer('Fine Arts')->default(0);
            $table->integer('Theatre')->default(0);
            $table->integer('Literary Art')->default(0);
            $table->integer('Crafts')->default(0);
            $table->integer('Photography')->default(0);
            $table->integer('Conferences')->default(0);
            $table->integer('College Festivals')->default(0);
            $table->integer('Technologies')->default(0);
            $table->integer('School Festivals')->default(0);
            $table->integer('Fundraiser')->default(0);
            $table->integer('Educational Fair')->default(0);
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
        Schema::dropIfExists('brandtags');
    }
}
