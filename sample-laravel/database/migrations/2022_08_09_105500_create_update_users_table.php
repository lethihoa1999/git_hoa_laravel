<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpdateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name', 255)->change();
            $table->dropColumn('email');   
            $table->string('mail_address', 100)->unique();
            $table->dropColumn('email_verified_at');
            $table->string('password', 255)->change();
            $table->dropColumn('remember_token');   
            $table->dropColumn('current_team_id'); 
            $table->dropColumn('profile_photo_path'); 
            $table->string('address', 255);
            $table->string('phone', 15);
            $table->softDeletes();      
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name');
            $table->string('email')->unique();
            $table->dropColumn('mail_address');
            $table->timestamp('email_verified_at')->nullable(); 
            $table->string('password');
            $table->rememberToken();   
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('deleted_at');
        });
    }
}