<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->text('short_content')->nullable();
            $table->text('content');
            $table->bigInteger('institution_id');
            $table->softDeletes();
            $table->timestamps();

            $table->string('preview_token')->nullable();
            $table->boolean('published')->default(true);
            $table->bigInteger('draft_parent_id')->nullable()->unsigned();
            $table->foreign('draft_parent_id')->references('id')->on('news')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
