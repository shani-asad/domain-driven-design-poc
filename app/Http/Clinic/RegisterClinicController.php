<?php

namespace App\Http\Clinic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterClinicController extends Controller
{
    public function index(){
        return view('clinics.register');
    }

    public function store(Request $request){

        $clinicRepository = new ClinicRepository();

        $this->validate($request, [
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'srcUrl' => 'required|max:255',
        ]);

        // store user
        $clinicRepository->store($request);

        return redirect()->route('clinics');
    }
}
