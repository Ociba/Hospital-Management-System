<?php

namespace App\Livewire\Staff;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Patients extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Patients' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.staff.patients',[
            'users' =>User::getUsers($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
