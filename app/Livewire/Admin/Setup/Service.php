<?php

namespace App\Livewire\Admin\Setup;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Admin\Services\HospitalService;

class Service extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Service' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.setup.service',[
            'services' =>HospitalService::getService($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
