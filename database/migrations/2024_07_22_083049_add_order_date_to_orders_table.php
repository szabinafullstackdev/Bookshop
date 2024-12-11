<?php
/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */ /*
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */ /*
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
}; */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOrderDateToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->timestamp('order_date')->nullable(); // Sau folosește $table->date('order_date')->nullable(); pentru o dată simplă
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('order_date');
        });
    }
}

