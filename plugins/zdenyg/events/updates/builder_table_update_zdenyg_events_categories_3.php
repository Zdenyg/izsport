<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEventsCategories3 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->integer('sort_order')->default(1);
    });
}

public function down()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->dropColumn('sort_order');
    });
}
}
