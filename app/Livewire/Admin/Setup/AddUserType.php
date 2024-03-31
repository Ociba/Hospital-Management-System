<?php

namespace App\Livewire\Admin\Setup;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Modules\Admin\Services\UserTypeService;
use Session;

class AddUserType extends ModalComponent
{
    public $type;
    public $created_by;

    // Validate
    protected $rules = [
        'type' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'type.required' => 'Type is required',
    ];

    public function createUserType()
    {
        $this->validate();

        $fields = [
            'type' => $this->type,
            'created_by' => auth()->user()->id,
        ];
        // Call the service create subject method
        UserTypeService::createType($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Usertype', 'refreshComponent');
        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.admin.setup.add-user-type');
    }
}
