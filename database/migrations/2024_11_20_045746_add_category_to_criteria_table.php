<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToCriteriaTable extends Migration
{
    public function up()
    {
        Schema::table('criteria', function (Blueprint $table) {
            $table->string('category')->nullable(); // Add a category column
        });
    }

    public function down()
    {
        Schema::table('criteria', function (Blueprint $table) {
            $table->dropColumn('category'); // Rollback the column if needed
        });
    }
}
