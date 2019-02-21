<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::disableForeignKeyConstraints();

    $this->call(UserTableSeeder::class);
    $this->call(WallpostTableSeeder::class);

         Schema::enableForeignKeyConstraints();

//        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }


//        DB::table('patients')->truncate();

}
