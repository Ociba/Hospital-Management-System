<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" wire:model="patient_name" class="form-control" id="Name">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputDateOfBirth" class="form-label">Date of Birth</label>
                        <input type="text"  wire:model="date_of_birth" class="form-control" id="DateOfBirth">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="ServiceId" class="form-label">Service</label>
                        <select id="ServiceId" class="form-select" wire:model="service_id">
                            <option>Choose</option>
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="ConsultationFee" class="form-label">Consultation Fee</label>
                        <input type="number" wire:model="consultation_fee" class="form-control" id="ConsultationFee" placeholder="Amount">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputGender" class="form-label">Gender</label> 
                        <select id="ServiceId" class="form-select" wire:model="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="NIN" class="form-label">NIN</label>
                        <input type="text"  wire:model="national_id_number" class="form-control" id="Nin">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputHomeDistrict" class="form-label">Home District</label>
                        <input type="text" wire:model="home_district" class="form-control" id="homeDistrict">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputTime" class="form-label">Current District</label>
                        <input type="text"  wire:model="district_of_residence" class="form-control" id="districtOfResidence">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputCounty" class="form-label">County</label>
                        <input type="text" wire:model="county" class="form-control" id="county">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputSubcounty" class="form-label">Subcounty</label>
                        <input type="text"  wire:model="sub_county" class="form-control" id="subCounty">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputParish" class="form-label">Parish</label>
                        <input type="text" wire:model="parish" class="form-control" id="Parish">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputVillage" class="form-label">Village</label>
                        <input type="text"  wire:model="village" class="form-control" id="village">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputPhoneNumber" class="form-label">Phone Number</label>
                        <input type="text" wire:model="phone_number" class="form-control" id="phoneNumber">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputCategory" class="form-label">Category</label>
                        <input type="text"  wire:model="category" class="form-control" id="category">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputNextOfKin" class="form-label">Next of Kin</label>
                        <input type="text" wire:model="next_of_kin" class="form-control" id="nextOfKin">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputNOKContact" class="form-label">NOK Contact</label>
                        <input type="text"  wire:model="next_of_kin_contact" class="form-control" id="nextOfKinContact">
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputDate" class="form-label">NOK Relationship</label>
                        <select id="NOKRelationship" class="form-select" wire:model="next_of_kin_relationship">
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
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputTime" class="form-label">Your Photo</label>
                        <input type="file"  wire:model="image" class="form-control" id="inputTime">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-button btn-sm">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
