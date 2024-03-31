<?php

namespace App\Livewire\Admin\Setup;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Services\DepartmentService;
use Session;

class AddDepartment extends ModalComponent
{
    public $department;
    public $description;
    public $created_by;

    // Validate
    protected $rules = [
        'department' => 'required',
        'description' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'department.required' => 'Department is required',
        'description.required' => 'Description is required',
    ];

    public function AddDepartment()
    {
        $this->validate();

        $fields = [
            'department' => $this->department,
            'description' => $this->description,
            'created_by' => auth()->user()->id,
        ];
        // Call the service create subject method
        DepartmentService::createDepartment($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Department', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.admin.setup.add-department');
    }
}
