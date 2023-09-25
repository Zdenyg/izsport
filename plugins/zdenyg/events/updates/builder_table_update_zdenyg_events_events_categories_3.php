<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEventsEventsCategories3 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_events_categories', function($table)
    {
        $table->dropPrimary(['events_id','categories_id']);
        $table->renameColumn('categories_id', 'category_id');
        $table->primary(['events_id','category_id']);
    });
}

public function down()
{
    Schema::table('zdenyg_events_events_categories', function($table)
    {
        $table->dropPrimary(['events_id','category_id']);
        $table->renameColumn('category_id', 'categories_id');
        $table->primary(['events_id','categories_id']);
    });
}
}
