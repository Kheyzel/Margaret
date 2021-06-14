<?php

use Illuminate\Database\Seeder;
use App\Vision;

class VisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vision::create([
            'vision' => 'Envisions that every child enjoys life to the fullest,
            freely assures the rights and protection against any form of threats and
            hostiles, able to enhance and develop one\'s potential and skill to grow a
            self-sufficient individual. To live a life in the love of God and helping gift
            to others, thus become a responsible citizen for the country and active
            participant in building a wholesome society.'
        ]);
    }
}
