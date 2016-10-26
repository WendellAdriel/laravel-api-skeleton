<?php

/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 18:12
 */

namespace LaravelApiSkeleton\Domains\Users\Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use LaravelApiSkeleton\Core\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->schema->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('users');
    }
}