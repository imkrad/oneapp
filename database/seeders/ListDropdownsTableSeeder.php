<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListDropdownsTableSeeder extends Seeder
{
    /**
     * Auto generated seeder file.
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('list_dropdowns')->delete();
        
        \DB::table('list_dropdowns')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'n/a',
                'classification' => 'n/a',
                'type' => 'n/a',
                'color' => 'n/a',
                'others' => 'n/a',
                'is_active' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Office of the Regional Director',
                'classification' => 'Unit',
                'type' => 'Main',
                'color' => 'n/a',
                'others' => 'ORD',
                'is_active' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Finance and Administrative Support Services',
                'classification' => 'Unit',
                'type' => 'Main',
                'color' => 'n/a',
                'others' => 'FASS',
                'is_active' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Technical Operations Services',
                'classification' => 'Unit',
                'type' => 'Main',
                'color' => 'n/a',
                'others' => 'TOS',
                'is_active' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Regional Office',
                'classification' => 'Station',
                'type' => 'Regional Office',
                'color' => 'n/a',
                'others' => 'RO-IX',
                'is_active' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Zamboanga Sibugay',
                'classification' => 'Station',
                'type' => 'Provincial Science and Technology Office',
                'color' => 'n/a',
                'others' => 'PSTO-ZSP',
                'is_active' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Zamboanga Del Norte',
                'classification' => 'Station',
                'type' => 'Provincial Science and Technology Office',
                'color' => 'n/a',
                'others' => 'PSTO-ZDN',
                'is_active' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Zamboanga Del Sur',
                'classification' => 'Station',
                'type' => 'Provincial Science and Technology Office',
                'color' => 'n/a',
                'others' => 'PSTO-ZDS',
                'is_active' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Zamboanga City / Isabela City',
                'classification' => 'Station',
                'type' => 'City Science & Technology Center',
                'color' => 'n/a',
                'others' => 'CSTC-ZCIC',
                'is_active' => 1,
            ),
        ));

        
    }
}