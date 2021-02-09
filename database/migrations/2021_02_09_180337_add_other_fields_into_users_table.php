<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherFieldsIntoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('photo')->nullable();
            $table->string('zip')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->boolean('is_wholesaler')->default(0);
            $table->boolean('status')->default(0);
            $table->string('verification_link')->nullable();
            $table->enum('email_verified', ['yes', 'no']);
            $table->string('f_url')->nullable();
            $table->string('g_url')->nullable();
            $table->string('f_check')->nullable();
            $table->string('g_check')->nullable();

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
            $table->dropColumn('photo');
            $table->dropColumn('zip');
            $table->dropColumn('city');
            $table->dropColumn('country');
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('fax');
            $table->dropColumn('is_wholesaler');
            $table->dropColumn('status');
            $table->dropColumn('verification_link');
            $table->dropColumn('email_verified');
            $table->dropColumn('f_url');
            $table->dropColumn('g_url');
            $table->dropColumn('f_check');
            $table->dropColumn('g_check');
        });
    }
}
