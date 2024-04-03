<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEventsCategories6 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->integer('sort_order')->default(0)->change();
    });
}

public function down()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->integer('sort_order')->default(null)->change();
    });
}
}
