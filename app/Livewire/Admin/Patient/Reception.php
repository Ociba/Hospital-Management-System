<?php

namespace App\Livewire\Admin\Patient;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Patient\App\Services\PatientService;

class Reception extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Reception' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.patient.reception',[
            'patients' =>PatientService::getPatient('normal',$this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
