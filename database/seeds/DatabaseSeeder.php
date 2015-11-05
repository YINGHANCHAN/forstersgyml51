<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        // disable foreign key check for this connection before running
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(SchoolTableSeeder::class);
        $this->call(StudentTableSeeder::class);

        // call the table seeder
        //supposed to only apply to a single connection and reset
        //but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


        Model::reguard();
    }
}
