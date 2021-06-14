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
        $this->call(UserSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(MissionSeeder::class);
        $this->call(VisionSeeder::class);
        $this->call(OrganizationSeeder::class);
        $this->call(ProgramSeeder::class);
    }
}
