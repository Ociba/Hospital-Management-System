<?php

namespace App\Livewire\Patient;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Appointment\Services\AppointmentService;

class Appointment extends Component
{
    
    use WithPagination, WithSorting;
    protected $listeners = ['Appointment' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        
        return view('livewire.patient.appointment',[
            'appointments' =>AppointmentService::getMyAppointment($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
