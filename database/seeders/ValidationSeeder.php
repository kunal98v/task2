<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ValidationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('validations')->truncate();
        DB::table('validations')->insert([
            array(
                "validation_name" => "string",
                "validation_type" => 'string|sometimes|required',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
                
            ),
            array(
                "validation_name" => "unique",
                "validation_type" => 'sometimes',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "email",
                "validation_type" => 'sometimes|required|email',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "bail",
                "validation_type" => 'sometimes|required',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "array",
                "validation_type" => 'sometimes|required',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "numeric",
                "validation_type" => 'numeric',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "min",
                "validation_type" => 'min:5',
                "is_mandatory" => false,
                "status" =>0,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "max",
                "validation_type" => 'max:255',
                "is_mandatory" => false,
                "status" => 0,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "alpha_num",
                "validation_type" => 'required|regex:/([a-zA-Z]{1,10})([0-9]{1,10})/',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "validation_name" => "image",
                "validation_type" => 'mimes:jpeg,jpg,bmp,png',
                "is_mandatory" => true,
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
        ]);
    }
}
