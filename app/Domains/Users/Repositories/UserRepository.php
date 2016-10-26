<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 26-10-2016
 * Time: 0:33
 */

namespace LaravelApiSkeleton\Domains\Users\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;

class UserRepository extends BaseRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return \LaravelApiSkeleton\Domains\Users\Models\User::class;
    }

    /**
     * Specify Validator class name
     */
    function validator()
    {
        return \LaravelApiSkeleton\Domains\Users\Validators\UserValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return \LaravelApiSkeleton\Domains\Users\Transformers\UserTransformer::class;
    }
}