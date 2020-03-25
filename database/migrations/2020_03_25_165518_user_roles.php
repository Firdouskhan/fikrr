<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('user_roles')) {
            Schema::create('user_roles', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->timestamps();
            });
        }

        Schema::table('user_roles', function(Blueprint $table) {
            if (!Schema::hasColumn('user_roles', 'name'))
                $table->string('name')->nullable();
            if (!Schema::hasColumn('user_roles', 'label'))
                $table->string('label')->nullable();
            if (!Schema::hasColumn('user_roles', 'description'))
                $table->text('description')->nullable();
        });

        Schema::table('users', function(Blueprint $table) {
            if (!Schema::hasColumn('users', 'user_role_id'))
                $table->string('user_role_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_roles');
    }
}
