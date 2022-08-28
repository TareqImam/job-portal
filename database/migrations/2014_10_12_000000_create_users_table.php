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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // ---------------employer details--------------- //
            $table->string('employerImage')->nullable();
            $table->string('companyName')->nullable();
            $table->string('companyWeb')->nullable();
            $table->string('companyEmail')->nullable();
            $table->text('companyDescription')->nullable();
            $table->text('companyImage')->nullable();

            // ---------------applicant details--------------- //
            $table->text('applicantImage')->nullable();
            $table->string('applicantPhone')->nullable();
            $table->date('applicantDate')->nullable();
            $table->string('applicantAge')->nullable();
            $table->string('applicatnGender')->nullable();
            $table->string('category_id')->nullable();
            $table->string('applicantTitle')->nullable();
            $table->string('applicantExperience')->nullable();
            $table->string('applicantSkill')->nullable();
            $table->string('applicantSalary')->nullable();
            $table->string('applicantExpectedSalary')->nullable();
            $table->string('applicantNationality')->nullable();
            $table->string('applicantAddress')->nullable();
            $table->string('applicantEducation')->nullable();
            $table->text('applicantCV')->nullable();
            $table->string('status')->default('pending');
            $table->string('role')->default('applicant');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
