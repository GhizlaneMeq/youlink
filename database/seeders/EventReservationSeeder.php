<?php

namespace Database\Seeders;

use App\Models\EventReservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EventReservation::factory()->count(10)->create();
        
    }
}
