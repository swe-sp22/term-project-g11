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
        Schema::create('applications', function (Blueprint $table) {
            $table->unsignedBigInteger('jobPostID');
            $table->unsignedBigInteger('jobSeekerID');
            $table->string('applicantName',30);
            $table->string('email');
            $table->integer('phoneNumber');
            $table->string('faculty');
            $table->year('graduationYear');
            $table->text('experience');
            $table->text('coverLetter');
            $table->timestamps();
            $table->primary(['jobPostID','jobSeekerID']);
            $table->foreign('jobPostID')->references('jobID')->on('job_posts');
            $table->foreign('jobSeekerID')->references('userID')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
};
