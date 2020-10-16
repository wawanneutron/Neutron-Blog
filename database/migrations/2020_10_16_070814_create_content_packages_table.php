<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('title_content');
            $table->string('writer');
            $table->date('date_writer');
            $table->string('category');
            $table->string('slug');
            $table->longText('content');
            $table->string('about_writer');
            $table->softDeletes();
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
        Schema::dropIfExists('content_packages');
    }
}
