<?php

namespace App\Livewire\Admin\Patient;

use App\Traits\WithSorting;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Modules\Appointment\Services\AppointmentService;

class Appointment extends Component
{
    use WithPagination, WithSorting;

    public $appointment_status;

    protected $listeners = ['Appointment' => '$refresh'];

    protected $rules = [
        'appointment_status' => 'in:pending,cancelled,successful',
    ];

    // Manually retrieve the appointment_status parameter from the request
    public function mount(Request $request)
    {
        $this->appointment_status = $request->route('appointment_status');
        $this->validate();
    }
    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.patient.appointment',[
            'appointments' =>AppointmentService::getAppointment($this->appointment_status,$this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
