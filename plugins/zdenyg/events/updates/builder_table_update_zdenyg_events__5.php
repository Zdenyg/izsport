<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEvents5 extends Migration
{
    public function up()
{
    Schema::table('zdenyg_events_', function($table)
    {
        $table->string('gallery_link')->nullable();
    });
}

public function down()
{
    Schema::table('zdenyg_events_', function($table)
    {
        $table->dropColumn('gallery_link');
    });
}
}
