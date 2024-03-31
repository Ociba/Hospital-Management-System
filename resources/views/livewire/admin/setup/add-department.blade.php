<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="AddDepartment">
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="inputType" class="form-label">Department</label>
                        <input type="text" wire:model="department" class="form-control" id="Department">
                        @error('department') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="inputType" class="form-label">Description</label>
                        <textarea type="text" rows="4" wire:model="description" class="form-control" id="Description"></textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit"  class="btn btn-bg btn-sm">Submit</button><br>
                        <div wire:loading wire:target="AddDepartment" class="text-success">Wait We are Saving Your Data...</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
