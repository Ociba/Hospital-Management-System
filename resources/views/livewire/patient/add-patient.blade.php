<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addClient">
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputFirstName" class="form-label">First Name</label>
                        <input type="text" wire:model="first_name" class="form-control" id="FName">
                        @error('first_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputLastName" class="form-label">Last Name</label>
                        <input type="text"  wire:model="last_name" class="form-control" id="LName">
                        @error('last_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputOtherNames" class="form-label">Other Names (Optional)</label>
                        <input type="text" wire:model="other_names" class="form-control" id="OtherName">
                        @error('other_names') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                        <input type="date"  wire:model="date_of_birth" class="form-control" id="DateOfBirth">
                        @error('date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="ServiceId" class="form-label">Service</label>
                        <select id="ServiceId" class="form-select" wire:model="service_id">
                            <option>Choose Service</option>
                            @foreach($services as $service)
                            <option value="{{$service->id}}">{{$service->service_name}}</option>
                            @endforeach
                        </select>
                        @error('service_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" wire:model="email" class="form-control" id="ConsultationFee" value="5000">
                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputGender" class="form-label">Gender</label> 
                        <select id="ServiceId" class="form-select" wire:model="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="NIN" class="form-label">NIN</label>
                        <input type="text"  wire:model="national_id_number" class="form-control" id="Nin">
                        @error('national_id_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputHomeDistrict" class="form-label">Home District</label>
                        <input type="text" wire:model="home_district" class="form-control" id="homeDistrict">
                        @error('home_district') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputDistrictOfResidence" class="form-label">Current District</label>
                        <input type="text"  wire:model="district_of_residence" class="form-control" id="districtOfResidence">
                        @error('district_of_residence') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputCounty" class="form-label">County</label>
                        <input type="text" wire:model="county" class="form-control" id="county">
                        @error('county') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputSubcounty" class="form-label">Subcounty</label>
                        <input type="text"  wire:model="sub_county" class="form-control" id="subCounty">
                        @error('sub_county') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputParish" class="form-label">Parish</label>
                        <input type="text" wire:model="parish" class="form-control" id="Parish">
                        @error('parish') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputVillage" class="form-label">Village</label>
                        <input type="text"  wire:model="village" class="form-control" id="village">
                        @error('village') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                        <input type="text" wire:model="phone_number" class="form-control" id="phoneNumber">
                        @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputCategory" class="form-label">Category</label>
                        <select id="category" class="form-select" wire:model="category">
                            <option>Choose</option>
                            <option value="booking">Booking</option>
                            <option value="normal">Normal</option>
                        </select>
                        @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputNextOfKin" class="form-label">Next of Kin Name</label>
                        <input type="text" wire:model="next_of_kin" class="form-control" id="nextOfKin">
                        @error('next_of_kin') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputNOKContact" class="form-label">NOK Contact</label>
                        <input type="text"  wire:model="next_of_kin_contact" class="form-control" id="nextOfKinContact">
                        @error('next_of_kin_contact') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputDate" class="form-label">NOK Relationship</label>
                        <select id="NOKRelationship" class="form-select" wire:model="next_of_kin_relationship">
                            <option>Choose</option>
                            <option value="father">Father</option>
                            <option value="mother">Mother</option>
                            <option value="husband">Husban</option>
                            <option value="wife">Wife</option>
                            <option value="brother">Brother</option>
                            <option value="sister">Sister</option>
                            <option value="uncle">Uncle</option>
                            <option value="aunt">Aunt</option>
                            <option value="friend">Friend</option>
                        </select>
                        @error('next_of_kin_relationship') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputImage" class="form-label">Your Photo</label>
                        <input type="file"  wire:model="image" class="form-control" accept="image/*" id="inputImage">
                        <div wire:loading wire:target="image" style="color:green;"><strong>Uploading Wait... <i class="fa fa-spinner fa-spin"></i></strong></div>
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" wire:model="password" class="form-control" id="Date">
                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-bg btn-sm">
                            <span wire:loading wire:target="addClient">
                                <i class="fa fa-spinner fa-spin"></i> 
                            </span>
                            <span wire:loading.remove wire:target="addClient">Submit</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
