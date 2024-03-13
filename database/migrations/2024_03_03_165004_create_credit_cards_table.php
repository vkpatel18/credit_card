<?php

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
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->string('card_number')->nullable();
            $table->string('expire_date')->nullable();
            $table->string('cvv')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('owner_name')->nullable();
            $table->string('card_type')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('is_delete')->nullable();
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
        Schema::dropIfExists('credit_cards');
    }
};
