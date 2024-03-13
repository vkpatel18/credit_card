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
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number')->nullable()->after('name');
            $table->string('role')->nullable()->after('password')->comment('1 is super_admin 2 is admin');
            $table->string('start_date')->nullable()->after('email_verified_at');
            $table->string('end_date')->nullable()->after('start_date');
            $table->string('is_delete')->default('0')->after('role')->comment('0 is note delete 1 is delete');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
