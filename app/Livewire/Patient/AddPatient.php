<?php

namespace App\Livewire\Patient;

use Livewire\Component;
use Session;
use Livewire\WithFileUploads;
use App\Traits\saveToPhotoFolder;
use LivewireUI\Modal\ModalComponent;
use Modules\Patient\App\Services\PatientService;
use Modules\Admin\Services\HospitalService;
use App\Models\User;

class AddPatient extends ModalComponent
{
    use saveToPhotoFolder,WithFileUploads;

    public $first_name;
    public $last_name;
    public $other_names;
    public $date_of_birth;
    public $service_id;
    public $gender;
    public $national_id_number;
    public $home_district;
    public $district_of_residence;
    public $county;
    public $sub_county;
    public $parish;
    public $village;
    public $phone_number;
    public $category;
    public $next_of_kin;
    public $next_of_kin_contact;
    public $next_of_kin_relationship;
    public $image;
    public $name;
    public $email;
    public $user_type;
    public $password;
    public $created_by;
    public $search =null; public $sortBy =null; public $sortDirection =null; public $perPage=null;

    // Validate
    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'other_names' => '',
        'date_of_birth' => 'required',
        'service_id' => 'required',
        'gender' => 'required',
        'national_id_number' => 'required',
        'home_district' => 'required',
        'district_of_residence' => 'required',
        'county' => 'required',
        'sub_county' => 'required',
        'parish' => 'required',
        'village' => 'required',
        'phone_number' => 'required',
        'category' => 'required',
        'next_of_kin' => 'required',
        'next_of_kin_contact' => 'required',
        'next_of_kin_relationship' => 'required',
        'image' => 'required|file|max:10240',
        'email' => 'required',
        'user_type' => '',
        'password' => 'required',
        'created_by' => '',
    ];

    // Customize validation error messages
    protected $messages = [
        'first_name.required' => 'First Name is required',
        'last_name.required' => 'Last Name is required',
        'date_of_birth.required' => 'Date of Birth is required',
        'service_id.required' => 'Service You want is required',
        'gender.required' => 'Gender is required',
        'national_id_number.required' => 'NIN is required',
        'home_district.required' => 'Home of Origin District is required',
        'district_of_residence.required' => 'Current District is required',
        'county.required' => 'County is required',
        'sub_county.required' => 'Subcounty is required',
        'parish.required' => 'Parish is required',
        'village.required' => 'Village is required',
        'phone_number.required' => 'Active Phone Number is required',
        'category.required' => 'Categoryis required',
        'next_of_kin.required' => 'Next of Kin is required',
        'next_of_kin_contact.required' => 'Next of Kin Contact is required',
        'next_of_kin_relationship.required' => 'Next of Kin Relationship is required',
        'image.required' => 'Photo is required',
        'image.file' => 'Please upload a file',
        'image.max' => 'The file size must be less than 10MB',
        'email.required' => 'Email is required',
        'password.required' => 'Password is required',
    ];

    public function addClient()
    {
        $this->validate();
        // 'Student_photos/'.$this->profile_photo_path

        $savedFileName = $this->saveToPhotoFolder('image', $this->image);
        $fields = [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'other_names' => $this->other_names,
            'date_of_birth' => $this->date_of_birth,
            'service_id' => $this->service_id,
            'gender' => $this->gender,
            'national_id_number' => $this->national_id_number,
            'home_district' => $this->district_of_residence,
            'district_of_residence' => $this->district_of_residence,
            'county' => $this->county,
            'sub_county' => $this->sub_county,
            'parish' => $this->parish,
            'village' => $this->village,
            'phone_number' => $this->phone_number,
            'category' => $this->category,
            'next_of_kin' => $this->next_of_kin,
            'next_of_kin_contact' => $this->next_of_kin_contact,
            'next_of_kin_relationship' => $this->next_of_kin_relationship,
            'image' => $savedFileName,
            'email' => $this->email,
            'user_type' => $this->user_type,
            'password' => $this->password,
            'created_by' => User::where('email',$this->email)->value('id'),
            'updated_by' =>auth()->user()->id,
        ];
        // dd($fields);
        // Call the service create service method
        User::createUserAccount($this->first_name, $this->email, $this->user_type, $this->password);
        PatientService::createBooking($fields);
        Session::flash('msg', 'Operation Succesful');
        $this->dispatch('Service', 'refreshComponent');
        $this->closeModal();
    }
    public function render()
    {
        return view('livewire.patient.add-patient',[
            'services' =>$this->getServives()
        ]);
    }
    private function getServives(){
        return HospitalService::getService($this->search, $this->sortBy, $this->sortDirection, $this->perPage);
    }
}
