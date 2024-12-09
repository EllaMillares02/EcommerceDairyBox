<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('sizes', function (Blueprint $table) {
        $table->unsignedBigInteger('flavor_id')->nullable()->change();  // Make flavor_id nullable
    });
}

public function down()
{
    Schema::table('sizes', function (Blueprint $table) {
        $table->dropForeign(['flavor_id']);
        $table->dropColumn('flavor_id');
    });
}

};
