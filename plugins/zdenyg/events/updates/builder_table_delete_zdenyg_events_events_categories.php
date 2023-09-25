<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableDeleteZdenygEventsEventsCategories extends Migration
{
    public function up()
{
    Schema::dropIfExists('zdenyg_events_events_categories');
}

public function down()
{
    Schema::create('zdenyg_events_events_categories', function($table)
    {
        $table->engine = 'InnoDB';
        $table->integer('event_id');
        $table->integer('category_id');
        $table->primary(['event_id','category_id']);
    });
}
}
