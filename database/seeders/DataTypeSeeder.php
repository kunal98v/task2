<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_types')->truncate();
        DB::table('data_types')->insert([
            array(
                "datatype_name" => "string",
                "status" => true,
                "created_at" => now(),
                "updated_at" => now(),
                
            ),
            array(
                "datatype_name" => "bigInteger",
                "status" => true,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "datatype_name" => "boolean",
                "status" => true,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "datatype_name" => "longText",
                "status" => true,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "datatype_name" => "string",
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array("datatype_name" => "integer",
            "status" => 1,
            "created_at" => now(),
            "updated_at" => now(),
               
            ),
            array(
                "data_type_name" => "string",
                "status" => 1,
                "created_at" => now(),
                "updated_at" => now(),
            ),
            array(
                "datatype_name" => "string",
                "status" => true,
                "created_at" => now(),
                "updated_at" => now(),
            )
          
        ]);
    }
}

