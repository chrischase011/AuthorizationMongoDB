<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorizationTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Roles Collection
        Schema::create('roles', function (Blueprint $collection) {
            $collection->unique('name');  // Unique index on 'name'
            $collection->index('label')->nullable();
            $collection->timestamps();
        });

        // Role-User Association Collection
        Schema::create('role_user', function (Blueprint $collection) {
            $collection->index('role_id');
            $collection->index('user_id');
            $collection->unique(['role_id', 'user_id']);  // Composite unique index
        });

        // Permissions Collection
        Schema::create('permissions', function (Blueprint $collection) {
            $collection->unique('name');  // Unique index on 'name'
            $collection->index('label')->nullable();
            $collection->timestamps();
        });

        // Permission-Role Association Collection
        Schema::create('permission_role', function (Blueprint $collection) {
            $collection->index('permission_id');
            $collection->index('role_id');
            $collection->unique(['permission_id', 'role_id']);  // Composite unique index
        });

        // Permission-User Association Collection
        Schema::create('permission_user', function (Blueprint $collection) {
            $collection->index('permission_id');
            $collection->index('user_id');
            $collection->unique(['permission_id', 'user_id']);  // Composite unique index
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_user');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('permission_user');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
    }
}
