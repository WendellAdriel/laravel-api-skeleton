<?php

/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 17:20
 */

namespace LaravelApiSkeleton\Core\Database;

use Illuminate\Database\Migrations\Migration as LaravelMigration;

abstract class Migration extends LaravelMigration
{
    /**
     * @var \Illuminate\Database\Schema\Builder
     */
    protected $schema;

    public function __construct()
    {
        $this->schema = app('db')->connection()->getSchemaBuilder();
    }

    abstract function up();

    abstract function down();
}