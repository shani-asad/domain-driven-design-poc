<?php

namespace App\Http\Clinic;

use Illuminate\Support\Facades\DB;

Class ClinicRepository{

    public function getClinicsAndServices() {
        $data = DB::table('clinics')
            ->join('clinic_services', 'clinics.id', '=', 'clinic_services.clinic_id')
            ->select('clinics.name', 'clinics.phone', 'clinics.address', 'clinic_services.name as service_name')
            ->get();

        for($i = 1; $i < count($data); $i++){

        }

        return $data;
    }
}
