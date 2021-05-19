<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnWsMenuStatusToWsMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ws_menus', function (Blueprint $table) {
            $table->integer('menu_status')->default(0)->after('menu_parent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ws_menus', function (Blueprint $table) {
            $table->removeColumn('menu_status');
        });
    }
}
