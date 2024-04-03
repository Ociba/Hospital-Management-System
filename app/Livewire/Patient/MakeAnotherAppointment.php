<?php

namespace App\Livewire\Patient;

use Modules\Appointment\Services\AppointmentService;
use Livewire\Component;
use Session;
use LivewireUI\Modal\ModalComponent;
use Modules\Admin\Services\HospitalService;
use Modules\Patient\App\Models\Patient;

class MakeAnotherAppointment extends ModalComponent
{
    public $patient_id;
    public $service_id;
    public $consultation_fee;
    public $date;
    public $time;
    public $created_by;
    public $search =null; public $sortBy =null; public $sortDirection =null; public $perPage=null;

    // Validate
    protected $rules = [
        'patient_id' => '',
        'consultation_fee' => '',
        'service_id' => 'required',
        'date' => 'required',
        'time' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'service_id.required' => 'Service You want is required',
        'date.required' => 'Date of Appointment is required',
        'time.required' => 'Time of Appointment is required',
    ];

    public function addAnotherAppointment()
    {
        $this->validate();
        $fields = [
            'patient_id' => Patient::where('created_by',auth()->user()->id)->value('id'),
            'consultation_fee' => 5000,
            'service_id' => $this->service_id,
            'date' => $this->date,
            'time' => $this->time,
            'created_by' => auth()->user()->id,
        ];
        // dd($fields);
        // Call the service create service method
        AppointmentService::anotherAppointment($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Appointment', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.patient.make-another-appointment',[
            'services' =>$this->getServives()
        ]);
    }
    private function getServives(){
        return HospitalService::getService($this->search, $this->sortBy, $this->sortDirection, $this->perPage);
    }
}
