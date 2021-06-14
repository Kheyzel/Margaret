<?php

use Illuminate\Database\Seeder;
use App\Mission;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mission::create([
            'mission' => 'To provide a friendly, warm, and
            conductive Residential Home Care to render a quality of service,
            to provide a place of improvement, enhancement and enrichment of learning to the poor,
            indigent and disadvantaged children that serves as a valuable tool for improved and successful life.'
        ]);

        Mission::create([
            'mission' => 'The charism and spirituality of the Franciscan Sisters of the Sacred Hearts
            and the ideals and principles of Fr. Simpliciano of the Nativity provide enlightenment to develop
            the talents and potentials of the children and the young girls.'
        ]);

        Mission::create([
            'mission' => 'For the children and young girls who are served in the institution to regain their
            hope and self-worth by recognizing their capacities in molding themselves to attain their fulfillment in life.'
        ]);

        Mission::create([
            'mission' => 'Strengthening linkages with other and NGO\'s, GO\'s and other stakeholders for effective and
            efficient delivery of the programs and services.'
        ]);
    }
}
