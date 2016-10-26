<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 26-10-2016
 * Time: 0:38
 */

namespace LaravelApiSkeleton\Domains\Users\Validators;

use Prettus\Validator\LaravelValidator;

class UserValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required|min:5|max:100',
        'email' => 'required|email',
    ];
}