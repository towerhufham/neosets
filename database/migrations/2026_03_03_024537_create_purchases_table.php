<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("seller_id")->nullable()->constrained(
                table: "users", indexName: "purchases_seller_id"
            );
            $table->foreignId("buyer_id")->constrained(
                table: "users", indexName: "purchases_buyer_id"
            );
            $table->bigInteger("price");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
