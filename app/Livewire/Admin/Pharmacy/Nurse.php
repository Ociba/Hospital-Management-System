<?php

namespace App\Livewire\Admin\Pharmacy;

use App\Traits\WithSorting;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Nurse extends Component
{
    use WithPagination, WithSorting;

    protected $listeners = ['Nurse' => '$refresh'];

    //over ridding sort by from the trait
    public $sortBy = '';

    //using the bootstrap pagination theme
    protected string $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.pharmacy.nurse',[
            'users' =>User::getUsers($this->search, $this->sortBy, $this->sortDirection, $this->perPage)
        ]);
    }
}
