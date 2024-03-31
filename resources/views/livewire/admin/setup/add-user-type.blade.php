<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="createUserType">
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label for="inputType" class="form-label">User Type</label>
                        <input type="text" wire:model="type" class="form-control" id="Type">
                        @error('type') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <button type="submit"  class="btn btn-bg btn-sm">Submit</button><br>
                        <div wire:loading wire:target="createUserType" class="text-success">Wait We are Saving Your Data...</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
