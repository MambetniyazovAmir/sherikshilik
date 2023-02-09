<?php

use App\Models\Import;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('barcode')->unique();
            $table->text('name')->nullable();
            $table->text('artikul')->nullable();
            $table->integer('quantity');
            $table->double('buy_price');
            $table->double('sell_price');
            $table->foreignIdFor(Import::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
