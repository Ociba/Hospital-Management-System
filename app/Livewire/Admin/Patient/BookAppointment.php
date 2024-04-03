<?php

namespace App\Livewire\Admin\Patient;

use Livewire\Component;
use Modules\Admin\Services\HospitalService;
use Modules\Patient\App\Models\Patient;
use Modules\Appointment\Services\AppointmentService;
use Session;

class BookAppointment extends Component
{
    public $patient_id;
    public $service_id;
    public $consultation_fee;
    public $date;
    public $time;
    public $created_by;
    public $updated_by;
    public $search =null; public $sortBy =null; public $sortDirection =null; public $perPage=null;

    // Validate
    protected $rules = [
        'patient_id' => '',
        'consultation_fee' => '',
        'service_id' => 'required',
        'date' => 'required',
        'time' => 'required',
        'created_by' => '',
        'updated_by' =>'',
    ];

    // Customize validation error messages
    protected $messages = [
        'service_id.required' => 'Service You want is required',
        'date.required' => 'Date of Appointment is required',
        'time.required' => 'Time of Appointment is required',
    ];

    public function bookAppointment()
    {
        $this->validate();
        $fields = [
            'patient_id' => $this->patient_id,
            'consultation_fee' => 5000,
            'service_id' => $this->service_id,
            'date' => $this->date,
            'time' => $this->time,
            'created_by' => $this->patient_id,
            'updated_by'=>auth()->user()->id,
        ];
        // Call the service create service method
        AppointmentService::anotherAppointment($fields);
        Session::flash('msg', 'Operation Succesful');
        return redirect()->to('/patient/booking');
    }

    public function mount($patient_id){
        $this->patient_id =$patient_id;
    }
    public function render()
    {
        return view('livewire.admin.patient.book-appointment',[
            'services' =>$this->getServives()
        ]);
    }
    private function getServives(){
        return HospitalService::getService($this->search, $this->sortBy, $this->sortDirection, $this->perPage);
    }
    }
