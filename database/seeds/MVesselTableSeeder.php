<?php

use Illuminate\Database\Seeder;
use App\M_Vessel;

class MVesselTableSeeder extends Seeder
{
    /**
     * Dummy data.
     *
     * @return array
     */
    private $m_vessels = [
        [
            'vessel_name' => "MV Meratus Manado", 
            'voyage_in' => "Voy03", 
            'voyage_out' => "Voy04",
            'eta' => "2019-04-10 10:00:00",
            'etb' => "2019-04-10 15:25:00",
            'etd' => "2019-04-15 15:00:00",
        ],
        [
            'vessel_name' => "MV CSCL Kingston", 
            'voyage_in' => "106N", 
            'voyage_out' => "106N",
            'eta' => "2019-04-10 10:00:00",
            'etb' => "2019-04-10 15:25:00",
            'etd' => "2019-04-15 15:00:00",
        ],
        [
            'vessel_name' => "CTP Fortune", 
            'voyage_in' => "007W", 
            'voyage_out' => "007W",
            'eta' => "2019-04-14 10:00:00",
            'etb' => "2019-04-14 15:25:00",
            'etd' => "2019-04-15 15:00:00",
        ],
        [
            'vessel_name' => "Tanto Langgeng", 
            'voyage_in' => "OEJ2C", 
            'voyage_out' => "OEJ2C",
            'eta' => "2019-04-10 10:00:00",
            'etb' => "2019-04-14 15:25:00",
            'etd' => "2019-04-15 15:00:00",
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->m_vessels as $m_vessel) {
            M_Vessel::create([
                'vessel_name' => $m_vessel['vessel_name'], 
                'voyage_in' => $m_vessel['voyage_in'], 
                'voyage_out' => $m_vessel['voyage_out'],
                'eta' => $m_vessel['eta'],
                'etb' => $m_vessel['etb'],
                'etd' => $m_vessel['etd'],
                'terminal' => "Terminal Panjang Indonesia",
                'name' => "Rinaldy Dwi Istanto"
            ]);
            echo $m_vessel['vessel_name']." created.";
        }
    }
}
