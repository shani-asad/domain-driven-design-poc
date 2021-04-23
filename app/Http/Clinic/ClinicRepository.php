<?php

namespace App\Http\Clinic;

use Illuminate\Support\Facades\DB;

Class ClinicRepository{

    public function getClinicsAndServices() {

        $data = DB::table('clinics')
            ->join('clinic_services', 'clinics.id', '=', 'clinic_services.clinic_id')
            ->select('clinics.name', 'clinics.phone', 'clinics.address', 'clinic_services.name as service_name')
            ->get();

        $data_len = count($data);
        $result = array();

        // combine elements of $data that has the same name and different service_name
        for($i = 1; $i < $data_len; $i++){
            if($i < $data_len - 1) {
                if ($data[$i]->name == $data[$i - 1]->name) {
                    $data[$i]->service_name .= "|" . $data[$i - 1]->service_name;
                    continue;
                }
                $data[$i - 1]->service_name = explode("|", $data[$i - 1]->service_name);
                array_push($result, $data[$i - 1]);
                continue;
            }
            else{
                if ($data[$i]->name == $data[$i - 1]->name) {
                    $data[$i]->service_name .= "|" . $data[$i - 1]->service_name;
                    $data[$i - 1]->service_name = explode("|", $data[$i - 1]->service_name);
                    array_push($result, $data[$i]);
                }
                $data[$i - 1]->service_name = explode("|", $data[$i - 1]->service_name);
                array_push($result, $data[$i - 1]);
                $data[$i]->service_name = explode("|", $data[$i]->service_name);
                array_push($result, $data[$i]);
            }
        }

        return $result;
    }
}
