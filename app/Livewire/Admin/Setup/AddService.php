<?php

namespace App\Livewire\Admin\Setup;

use Livewire\Component;
use Modules\Admin\Services\HospitalService;
use Session;
use LivewireUI\Modal\ModalComponent;
use Modules\Department\App\Models\Department;

class AddService extends ModalComponent
{
    public $service_name;
    public $department_id;
    public $created_by;
    public $search =null; public $sortBy =null; public $sortDirection =null; public $perPage=null;

    // Validate
    protected $rules = [
        'department_id' => 'required',
        'service_name' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'service_name.required' => 'Name of Service is required',
        'department_id.required' => 'Department is required',
    ];

    public function AddService()
    {
        $this->validate();

        $fields = [
            'department_id' => $this->department_id,
            'service_name' => $this->service_name,
            'created_by' => auth()->user()->id,
        ];
        // Call the service create service method
        HospitalService::createService($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Service', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.admin.setup.add-service',[
            'departments' =>$this->getDepartments()
        ]);
    }
    private function getDepartments(){
        return Department::getDepartment($this->search, $this->sortBy, $this->sortDirection, $this->perPage);
    }
}
