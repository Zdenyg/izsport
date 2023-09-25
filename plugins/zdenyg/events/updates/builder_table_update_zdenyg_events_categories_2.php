<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEventsCategories2 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->renameColumn('category', 'category_title');
    });
}

public function down()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->renameColumn('category_title', 'category');
    });
}
}
