<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnWsCategoryActiveTableCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ws_categories', function (Blueprint $table) {
            $table->renameColumn('category_active', 'category_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ws_categories', function (Blueprint $table) {
            $table->renameColumn('category_status', 'category_active');
        });
    }
}
