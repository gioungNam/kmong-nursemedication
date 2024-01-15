<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('main');
    }

    public function drugCalc(): string
    {
        return view('drug_calc_page');
    }

    public function drugInfusionTools(): string
    {
        return view('drug_infusion_tools_page');
    }

    public function patientList(): string
    {
        return view('patient_list_page');
    }
    
    public function patientDetails(): string
    {
        return view('patient_details');
    }

    public function prescriptionDetails(): string
    {
        return view('prescription_details');
    }
}
