<?php

/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 19:23
 */

namespace LaravelApiSkeleton\Domains\Users\Database\Seeders;

use \Illuminate\Database\Seeder;
use \LaravelApiSkeleton\Domains\Users\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        factory(User::class)
            ->times(5)
            ->create();
    }
}