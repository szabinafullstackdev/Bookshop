<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   // 2024_07_16_000000_add_completed_at_to_orders_table.php

public function up()
{
    Schema::table('orders', function (Blueprint $table) {
        $table->timestamp('completed_at')->nullable();
    });
}

public function down()
{
    Schema::table('orders', function (Blueprint $table) {
        $table->dropColumn('completed_at');
    });
}

};
