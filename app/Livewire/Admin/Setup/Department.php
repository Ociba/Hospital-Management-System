<?php

namespace App\Livewire\Admin\Setup;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use Modules\Department\App\Services\DepartmentService;
use App\Models\User;

class Department extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Department' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.setup.department',[
            'departments' =>DepartmentService::getDepartment($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
