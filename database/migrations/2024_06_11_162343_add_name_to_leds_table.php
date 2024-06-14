<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNameToLedsTable extends Migration
{
    public function up()
    {
        Schema::table('leds', function (Blueprint $table) {
            $table->string('name')->after('id'); // Tambahkan kolom name
        });
    }

    public function down()
    {
        Schema::table('leds', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }
}
