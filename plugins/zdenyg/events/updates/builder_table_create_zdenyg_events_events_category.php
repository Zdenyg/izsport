<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateZdenygEventsEventsCategory extends Migration
{
    public function up()
{
    Schema::create('zdenyg_events_events_category', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('event_id');
        $table->integer('category_id');
        $table->primary(['event_id','category_id']);
    });
}

public function down()
{
    Schema::dropIfExists('zdenyg_events_events_category');
}
}
