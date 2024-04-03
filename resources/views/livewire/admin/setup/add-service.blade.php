<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="AddService">
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="ServiceId" class="form-label">Department</label>
                        <select id="DepartmentId" class="form-select" wire:model="department_id">
                            <option>Choose department</option>
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->department}}</option>
                            @endforeach
                        </select>
                        @error('department_id') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="inputServiceName" class="form-label">Service</label>
                        <input type="text" wire:model="service_name" class="form-control" id="ServiceName">
                        @error('service_name') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-bg btn-sm">
                        <span wire:loading wire:target="AddService">
                            <i class="fa fa-spinner fa-spin"></i> 
                        </span>
                        <span wire:loading.remove wire:target="AddService">Submit</span>
                    </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
