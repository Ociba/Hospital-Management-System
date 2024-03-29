<?php

namespace App\Livewire\Admin\Setup;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddUserType extends ModalComponent
{
    public function render()
    {
        return view('livewire.admin.setup.add-user-type');
    }
}
