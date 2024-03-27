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
        Schema::table('template_fields', function (Blueprint $table) {
        $table->bigInteger("validation_id");
        $table->bigInteger("data_type_id");
        $table->bigInteger("template_id");
        $table->string("name"); 
        $table->string("email");
        $table->bigInteger("mobile");
        $table->longText("address");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('template_fields', function (Blueprint $table) {
            //
        });
    }
};
