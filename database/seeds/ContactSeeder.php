<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'contact_number' => '+639218362697',
            'contact_number1' => '+639218362697',
            'email_add' => 'margaret7317@gmail.com',
            'address' => 'NHA Southville 7, Site 2, Brgy. Dayap, Calauan, Laguna',
            'bank_name' => '-',
            'bank_branch' => '-',
            'bank_act_num' => '-',
            'swift_code_num' => '-'
        ]);
    }
}
