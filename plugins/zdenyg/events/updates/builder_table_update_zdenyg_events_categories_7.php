<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEventsCategories7 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->timestamp('created_at')->nullable();
        $table->timestamp('updated_at')->nullable();
    });
}

public function down()
{
    Schema::table('zdenyg_events_categories', function($table)
    {
        $table->dropColumn('created_at');
        $table->dropColumn('updated_at');
    });
}
}
