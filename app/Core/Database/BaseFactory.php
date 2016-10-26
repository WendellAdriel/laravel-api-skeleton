<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 17:22
 */

namespace LaravelApiSkeleton\Core\Database;

use Faker\Generator;
use Illuminate\Database\Eloquent\Factory;

abstract class BaseFactory
{
    /**
     * @var string
     */
    protected $model;

    /**
     * @var Factory
     */
    protected $factory;

    /**
     * @var Generator
     */
    protected $faker;

    /**
     * ModelFactory constructor.
     */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->faker = app()->make(Generator::class);
    }

    /**
     *
     */
    public function define()
    {
        $this->factory->define($this->model, function() {
            return $this->fields();
        });
    }

    /**
     * @return array
     */
    abstract protected function fields();
}