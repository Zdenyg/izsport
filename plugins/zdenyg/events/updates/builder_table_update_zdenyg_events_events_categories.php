<?php namespace Zdenyg\Events\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableUpdateZdenygEventsEventsCategories extends Migration
{
    public function up()
{
    Schema::rename('zdenyg_events_events_category', 'zdenyg_events_events_categories');
}

public function down()
{
    Schema::rename('zdenyg_events_events_categories', 'zdenyg_events_events_category');
}
}
