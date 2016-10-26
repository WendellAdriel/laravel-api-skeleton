<?php

/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 17:33
 */

namespace LaravelApiSkeleton\Domains\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Migrator\MigratorTrait as HasMigrations;
use LaravelApiSkeleton\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use LaravelApiSkeleton\Domains\Users\Database\Migrations\CreateUsersTable;
use LaravelApiSkeleton\Domains\Users\Database\Factories\UserFactory;
use LaravelApiSkeleton\Domains\Users\Database\Seeders\UserSeeder;

class UserDomainServiceProvider extends ServiceProvider
{
    use HasMigrations;

    public function register()
    {
        $this->registerMigrations();
        $this->registerFactories();
        $this->registerSeeders();
    }

    protected function registerMigrations()
    {
        $this->migrations([
            CreateUsersTable::class,
            CreatePasswordResetsTable::class,
        ]);
    }

    protected function registerFactories()
    {
        (new UserFactory())->define();
    }

    protected function registerSeeders()
    {
        $this->seeders([
            UserSeeder::class,
        ]);
    }
}