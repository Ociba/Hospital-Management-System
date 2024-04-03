<div>
    {{-- The whole world belongs to you. --}}
    <div class="col-md-12">
        <div class="row g-2">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form wire:submit.prevent="bookAppointment">
                                <div class="row g-2">
                                    <input type="hidden" wire:model="patient_id" class="form-control" value="{{$patient_id}}" id="PatientId">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputPatient" class="form-label">Consultation Fee</label>
                                        <input type="text" wire:model="consultation_fee" class="form-control" placeholder="5000" id="ConsultaionFee" readonly>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                    <label for="inputService" class="form-label">Service Required</label>
                                        <select id="ServiceId" class="form-select" wire:model="service_id">
                                            <option>Choose Service</option>
                                            @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->service_name}}</option>
                                            @endforeach
                                        </select>
                                        @error('service_id') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="mb-3 col-md-6">
                                        <label for="inputDate" class="form-label">Date</label>
                                        <input type="date" wire:model="date" class="form-control" id="Date">
                                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="inputTime" class="form-label">Time</label>
                                        <input type="time" wire:model="time" class="form-control" id="Time">
                                        @error('time') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-bg btn-sm">
                                            <span wire:loading wire:target="bookAppointment">
                                                <i class="fa fa-spinner fa-spin"></i> 
                                            </span>
                                            <span wire:loading.remove wire:target="bookAppointment">Submit</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
