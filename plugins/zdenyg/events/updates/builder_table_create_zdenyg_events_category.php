<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZdenygEventsCategory extends Migration
{
    public function up()
{
    Schema::create('zdenyg_events_category', function($table)
    {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->string('category');
        $table->string('slug');
    });
}

public function down()
{
    Schema::dropIfExists('zdenyg_events_category');
}
}
