<?php

namespace App\Http\Clinic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function  index() {
        $clinicRepository = new ClinicRepository();
        $select = $clinicRepository->getClinicsAndServices();

        return view('clinics.index')->with('data', $select);
    }
}
