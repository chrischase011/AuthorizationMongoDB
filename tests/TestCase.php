<?php

namespace ChrisChase\AuthorizationMongoDB\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use ChrisChase\Authorization\Authorization;
use ChrisChase\Authorization\AuthorizationServiceProvider;
use ChrisChase\Authorization\Tests\Stubs\User;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        // Create the users table for testing.
        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * {@inheritdoc}
     */
    protected function getPackageProviders($app)
    {
        return [
            AuthorizationServiceProvider::class,
        ];
    }

    /**
     * Returns a new stub user instance.
     *
     * @param array $attributes
     *
     * @return User
     */
    protected function createUser($attributes = [])
    {
        return User::create($attributes);
    }

    /**
     * Returns a new role instance.
     *
     * @param array $attributes
     *
     * @return \ChrisChase\Authorization\Role
     */
    protected function createRole($attributes = [])
    {
        $role = Authorization::role();

        return $role::create($attributes);
    }

    /**
     * Returns a new permission instance.
     *
     * @param array $attributes
     *
     * @return \ChrisChase\Authorization\Permission
     */
    protected function createPermission($attributes = [])
    {
        $permission = Authorization::permission();

        return $permission::create($attributes);
    }
}
