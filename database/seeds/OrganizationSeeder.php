<?php

use Illuminate\Database\Seeder;
use App\Organization;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organization::create([
            'org_position' => 'DIRECTRESS / LOCAL ANIMATOR',
            'org_name' => 'Sr. Maria Nimfa R. Penido, SFSC'
        ]);

        Organization::create([
            'org_position' => 'SISTER IN CHARGE',
            'org_name' => 'Sr. Jackielyn N. Jumamoy , SFSC'
        ]);

        Organization::create([
            'org_position' => 'LOCAL TREASURER',
            'org_name' => 'Sr. Rogelisa R. Omamalin, SFSC'
        ]);

        Organization::create([
            'org_position' => 'HOUSE PARENT',
            'org_name' => 'Gracechelle Retorca'
        ]);

        Organization::create([
            'org_position' => 'SOCIAL WORKER',
            'org_name' => 'Wiljane Mae Agapay, RSW'
        ]);

        Organization::create([
            'org_position' => 'COOK',
            'org_name' => 'Marivic S. Ibasco'
        ]);

        Organization::create([
            'org_position' => 'DRIVER',
            'org_name' => 'Christian L. Baldovino'
        ]);
    }
}
