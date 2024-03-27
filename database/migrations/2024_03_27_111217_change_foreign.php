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
            $table->unsignedBigInteger("data_type_id")->change(); // Assuming it's an unsigned big integer
            $table->unsignedBigInteger("template_id")->change(); // Assuming it's an unsigned big integer
            $table->unsignedBigInteger("validation_id")->change(); // Assuming it's an unsigned big integer

            $table->foreign("data_type_id")->references("id")->on('data_types');
            $table->foreign("template_id")->references("id")->on('templates');
            $table->foreign("validation_id")->references("id")->on('validations');

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
