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
            $table->bigInteger("validation_id")->nullable();
            $table->bigInteger("data_type_id")->nullable();
            $table->bigInteger("template_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('template_fields', function (Blueprint $table) {
            $table->bigInteger("validation_id")->nullable()->change();
            $table->bigInteger("data_type_id")->nullable()->change();
            $table->bigInteger("template_id")->nullable()->change();
        });
    }
};
