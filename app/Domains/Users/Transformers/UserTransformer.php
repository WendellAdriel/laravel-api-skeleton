<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 26-10-2016
 * Time: 0:48
 */

namespace LaravelApiSkeleton\Domains\Users\Transformers;

use LaravelApiSkeleton\Domains\Users\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
            "id"       => (int) $user->id,
            "name"     => $user->name,
            "email"    => $user->email,
            "password" => $user->password,
        ];
    }
}