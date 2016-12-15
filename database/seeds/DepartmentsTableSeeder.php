<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('departments')->insert([
          'name'=>'Richlands',
        ]);

        DB::table('departments')->insert([
          'name'=>'Mount Ommaney',
        ]);

        DB::table('departments')->insert([
          'name'=>'Australia Fair',
        ]);

        DB::table('departments')->insert([
          'name'=>'Peninsula Fair',
        ]);

        DB::table('departments')->insert([
          'name'=>'Chermside',
        ]);

        DB::table('departments')->insert([
          'name'=>'Kawana',
        ]);

        DB::table('departments')->insert([
          'name'=>'Toombul',
        ]);

        DB::table('departments')->insert([
          'name'=>'Logan Central',
        ]);

        DB::table('departments')->insert([
          'name'=>'Garden City',
        ]);

        DB::table('departments')->insert([
          'name'=>'Logan Hyperdome',
        ]);

        DB::table('departments')->insert([
          'name'=>'Browns Plains',
        ]);
    }
}
