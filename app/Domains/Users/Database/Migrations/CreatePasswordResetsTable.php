<?php
/**
 * Created by PhpStorm.
 * User: wendell_adriel
 * Date: 25-10-2016
 * Time: 18:21
 */

namespace LaravelApiSkeleton\Domains\Users\Database\Migrations;


use Illuminate\Database\Schema\Blueprint;
use LaravelApiSkeleton\Core\Database\Migration;

class CreatePasswordResetsTable extends Migration
{
    public function up()
    {
        $this->schema->create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
        });
    }

    public function down()
    {
        $this->schema->drop('password_resets');
    }
}