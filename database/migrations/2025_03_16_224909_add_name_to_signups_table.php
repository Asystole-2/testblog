<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToSignupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('signups', function (Blueprint $table) {
            // Only add the column if it doesn't exist
            if (!Schema::hasColumn('signups', 'name')) {
                $table->string('name')->after('id');
            }
        });
    }

    public function down()
    {
        Schema::table('signups', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
