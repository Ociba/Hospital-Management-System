<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use Modules\Patient\App\Services\PatientService;

class MyProfile extends Component
{
    public function render()
    {
        return view('livewire.patient.my-profile',[
            'my_details' =>PatientService::getProfile()
        ]);
    }
}
