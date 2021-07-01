<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tp = [
            'title' => "Nusa Penida",
            'slug' => "Nusa-Penida",
            'location' => "Republic of Indonesia Raya",
            'about' => "Wonderful Place",
            'featured_event' => "Tari Kecak",
            'language' => "Bahasa Indonesia",
            'foods' => "Local Foods",
            'departure_date' => "2021-02-3",
            'duration' => "2",
            'type'=> "Open Trip",
            'price' => 45
        ];
        
        \DB::table('travel_packages')->insert($tp);
    }
}
