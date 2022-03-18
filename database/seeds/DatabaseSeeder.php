<?php

use App\Student;
use App\Team;
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
        // $this->call(UserSeeder::class);
        factory(App\Team::class, 5)->create();
        factory(App\Student::class, 30)->create();


    }
}
