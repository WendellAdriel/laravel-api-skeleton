<?php

/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 19:14
 */

namespace LaravelApiSkeleton\Domains\Users\Database\Factories;

use \LaravelApiSkeleton\Core\Database\BaseFactory;
use \LaravelApiSkeleton\Domains\Users\Models\User;

class UserFactory extends BaseFactory
{
    protected $model = User::class;

    protected function fields()
    {
        static $password;
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'password' => $password ?: $password = bcrypt('secret'),
            'remember_token' => str_random(10),
        ];
    }
}