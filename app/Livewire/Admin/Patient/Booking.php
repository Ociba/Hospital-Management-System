<?php

namespace App\Livewire\Admin\Patient;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Patient\App\Services\PatientService;

class Booking extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Booking' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.patient.booking',[
            'patients' =>PatientService::getPatient('booking',$this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
