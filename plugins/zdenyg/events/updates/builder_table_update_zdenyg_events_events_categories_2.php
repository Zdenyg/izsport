<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEventsEventsCategories2 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_events_categories', function($table)
    {
        $table->dropPrimary(['event_id','category_id']);
        $table->integer('events_id');
        $table->integer('categories_id');
        $table->dropColumn('event_id');
        $table->dropColumn('category_id');
        $table->primary(['events_id','categories_id']);
    });
}

public function down()
{
    Schema::table('zdenyg_events_events_categories', function($table)
    {
        $table->dropPrimary(['events_id','categories_id']);
        $table->dropColumn('events_id');
        $table->dropColumn('categories_id');
        $table->integer('event_id');
        $table->integer('category_id');
        $table->primary(['event_id','category_id']);
    });
}
}
