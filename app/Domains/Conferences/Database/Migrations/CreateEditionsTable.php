<?php

namespace Confee\Domains\Conferences\Database\Migrations;

use Confee\Support\Database\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateUsersTable.
 */
class CreateEditionsTable extends Migration
{
    public function up()
    {
        $this->schema->create('editions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('conference_id')->index();
            $table->string('name');
            $table->json('venue')->nullable();
            $table->date('start_date');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('editions');
    }
}
