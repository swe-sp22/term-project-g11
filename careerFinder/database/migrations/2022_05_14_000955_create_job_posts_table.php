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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->bigIncrements('jobID');
            $table->string('jobTitle');
            $table->string('jobLocation');
            $table->text('jobDescription');
            $table->text('jobRequirments');
            $table->unsignedBigInteger('companyID');
            $table->unsignedBigInteger('categoryID');
            $table->date('deadline');
            $table->timestamps();
            $table->foreign('companyID')->references('userID')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('categoryID')->references('categoryID')->on('job_categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_posts');
    }
};
