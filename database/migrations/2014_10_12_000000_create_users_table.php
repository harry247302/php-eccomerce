<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->text('first_name');
            $table->text('last_name');
            $table->text('gender');
            $table->text('religion');
            $table->text('caste');
            $table->text('sub_caste')->nullable();
            $table->text('mobile');
            $table->text('id_status');
            $table->text('alt_mobile')->nullable();
            $table->string('email')->unique();
            $table->text('password');
            $table->text('is_admin');
            $table->text('user_type');
            $table->longText('about_myself')->nullable();
            $table->string('profile_id');
            $table->text('profile_by');
            $table->text('maratial_status')->nullable();
            $table->text('citizenship')->nullable();
            $table->text('state')->nullable();
            $table->text('city')->nullable();
            $table->text('country')->nullable();
            $table->text('mother_tongue')->nullable();
            $table->text('assets')->nullable();
            $table->text('hobbies')->nullable();
            $table->text('contact_timming')->nullable();
            $table->text('age')->nullable();
            $table->text('tob')->nullable();
            $table->text('dob')->nullable();
            $table->text('pob')->nullable();
            $table->text('height')->nullable();
            $table->text('weight')->nullable();
            $table->text('blood_group')->nullable();
            $table->text('body_type')->nullable();
            $table->text('complexion')->nullable();
            $table->text('eating_habits')->nullable();
            $table->text('drinking_habits')->nullable();
            $table->text('smoking_habits')->nullable();
            $table->text('physical_status')->nullable();
            $table->text('is_hiv')->nullable();
            $table->text('is_manglik')->nullable();
            $table->text('is_horo_match')->nullable();
            $table->text('nakshatra')->nullable();
            $table->text('rashi')->nullable();
            $table->text('family_type')->nullable();
            $table->text('family_status')->nullable();
            $table->text('family_value')->nullable();
            $table->text('no_of_brother')->nullable();
            $table->text('no_of_married_brother')->nullable();
            $table->text('no_of_sister')->nullable();
            $table->text('no_of_married_sister')->nullable();
            $table->text('family_location')->nullable();
            $table->text('father_occupation')->nullable();
            $table->text('family_income')->nullable();
            $table->longText('about_family')->nullable();
            $table->text('req_age_from')->nullable();
            $table->text('req_age_to')->nullable();
            $table->text('req_physical_status')->nullable();
            $table->text('req_maratial_status')->nullable();
            $table->text('req_religion')->nullable();
            $table->text('req_caste')->nullable();
            $table->text('req_sub_caste')->nullable();
            $table->text('req_mother_tongue')->nullable();
            $table->text('req_manglik')->nullable();
            $table->text('req_degree')->nullable();
            $table->text('req_occupation')->nullable();
            $table->text('req_income')->nullable();
            $table->text('req_eating_habits')->nullable();
            $table->text('req_drinking_habits')->nullable();
            $table->text('req_smoking_habits')->nullable();
            $table->text('req_complexion')->nullable();
            $table->text('req_body_type')->nullable();
            $table->text('req_height_from')->nullable();
            $table->text('req_height_to')->nullable();
            $table->text('req_about_partner')->nullable();
            $table->text('created_by')->nullable();
            $table->text('photo1')->nullable();
            $table->text('photo2')->nullable();
            $table->text('photo3')->nullable();
            $table->timestamp('email_verified_at')->nullable();
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
}
