<?php

namespace LaravelApiSkeleton\Domains\Users\Providers;

use LaravelApiSkeleton\Core\Domain\ServiceProvider;
use LaravelApiSkeleton\Domains\Users\Database\Migrations\CreatePasswordResetsTable;
use LaravelApiSkeleton\Domains\Users\Database\Migrations\CreateUsersTable;
use LaravelApiSkeleton\Domains\Users\Database\Factories\UserFactory;
use LaravelApiSkeleton\Domains\Users\Database\Seeders\UserSeeder;

class UserDomainServiceProvider extends ServiceProvider
{
    protected $alias = 'users';
    
    protected $migrations = [
        CreateUsersTable::class,
        CreatePasswordResetsTable::class,
    ];
    
    protected $factories = [
        UserFactory::class,
    ];
    
    protected $seeders = [
        UserSeeder::class,
    ];
}