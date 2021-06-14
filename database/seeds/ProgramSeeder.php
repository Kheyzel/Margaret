<?php

use Illuminate\Database\Seeder;
use App\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'title' => 'Residential Care',
            'description' => 'We offer Temporary Shelter, Home Life Care, and Life Management Counseling.'
        ]);

        Program::create([
            'title' => 'Rehabilitation',
            'description' => 'We give Psychiatric Evaluation and Skills Building. We also have Psycho-therapeutic
            Intervention Group for music, arts, dance, wilderness, play, sports, family, and aquatic therapy.'
        ]);

        Program::create([
            'title' => 'Education',
            'description' => 'We provide Formal and Non-formal Education, After school activities, Special Education
            and Tutorials, Monitoring for Academic Performances and Achievements, and Provision of educational supplies,
            materials and needs.'
        ]);

        Program::create([
            'title' => 'Life—Skills Building and Training',
            'description' => 'In here , we have Skills Training Enhancement, After School Activities, and Household Management.'
        ]);

        Program::create([
            'title' => 'Spiritual and Value Formation',
            'description' => 'We also do Cathechism classes and sessions, Retreats and Recollection, Spiritual direction and
            Self disclosure, and Life Management Counselling ( Guidance and Counselling).'
        ]);
    }
}
