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
            $table->string('companyDescription')->nullable();
            $table->text('companyImage')->nullable();

            // ---------------applicant details--------------- //
            $table->string('applicantImage')->nullable();
            $table->string('applicantCV')->nullable();

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
