<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_system', function (Blueprint $table) {
            $table->boolean('adminstration')->default(0);
            $table->boolean('student')->default(0);
            $table->boolean('lecturer')->default();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_system', function (Blueprint $table) {
            $table->dropColumn('adminstration');
            $table->dropColumn('student');
            $table->dropColumn('lecturer');
        });
    }
}
