<?php

use App\School;
use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //remove any data from the data first
        School::truncate();

        // create 2 schools objects

        $school1 = new School();

        $school1->schoolname = 'Wantirna';

        $school1->save();

        $school2 = new School();

        $school2->schoolname = 'Bayswater';

        $school2->save();

        $school3 = new School();

        $school3->schoolname = 'Scoresby';

        $school3->save();

        $school4 = new School();

        $school4->schoolname = 'Vermont';

        $school4->save();

        $school5 = new School();

        $school5->schoolname = 'Boronia';

        $school5->save();

    }
}
