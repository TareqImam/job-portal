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
            $table->id();
            $table->string('jobPostName');
            $table->string('jobPostType');
            $table->string('jobPostVacancy');
            $table->string('jobPostSalary');
            $table->string('jobPostLocation');
            $table->string('jobPostStatus')->default('Active');
            $table->integer('categoryId');
            $table->integer('user_id');
            $table->text('jobPostDescription');
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
        Schema::dropIfExists('job_posts');
    }
};
