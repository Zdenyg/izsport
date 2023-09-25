<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEvents4 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_', function($table)
    {
        $table->integer('sort_order')->default(1)->change();
    });
}

public function down()
{
    Schema::table('zdenyg_events_', function($table)
    {
        $table->integer('sort_order')->default(null)->change();
    });
}
}
