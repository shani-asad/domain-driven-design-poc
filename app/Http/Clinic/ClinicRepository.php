<?php

namespace App\Http\Clinic;

Class ClinicRepository{
    public function getAll(){
        return Clinic::all();
    }

    public function store($request){
        Clinic::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'srcUrl' => $request->srcUrl,
        ]);
    }
}
