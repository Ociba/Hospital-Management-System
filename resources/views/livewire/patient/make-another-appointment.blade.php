<div>
    {{-- Stop trying to control. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="addAnotherAppointment">
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="ServiceId" class="form-label">Service</label>
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
                    <div class="mb-3 col-md-12">
                        <label for="inputConsultationFee" class="form-label">Date</label>
                        <input type="text" wire:model="consultation_fee" class="form-control" id="ConsultationFee" placeholder="5000" readonly>
                        @error('consultation_fee') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="inputDate" class="form-label">Date</label>
                        <input type="date" wire:model="date" class="form-control" id="date">
                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="inputTime" class="form-label">Time</label>
                        <input type="time" wire:model="time" class="form-control" id="time">
                        @error('time') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-bg btn-sm">
                        <span wire:loading wire:target="addAnotherAppointment">
                            <i class="fa fa-spinner fa-spin"></i> 
                        </span>
                        <span wire:loading.remove wire:target="addAnotherAppointment">Submit</span>
                    </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
