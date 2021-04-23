<?php

namespace App\Http\ClinicService;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ClinicServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        $clinic_IDs = DB::table('clinics')->pluck('id');

        for ($i = 0; $i < count($clinic_IDs); $i++) {
            if(rand(0,1) == 0){
                DB::table('clinic_services')->insert([
                    'name' => $faker->randomElement(['Rapid Antibodi', 'Rapid Antigen']),
                    'clinic_id' => $clinic_IDs[$i],
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
                ]);
                continue;
            }

            DB::table('clinic_services')->insert([
                'name' => 'Rapid Antibodi',
                'clinic_id' => $clinic_IDs[$i],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
            DB::table('clinic_services')->insert([
                'name' => 'Rapid Antigen',
                'clinic_id' => $clinic_IDs[$i],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
