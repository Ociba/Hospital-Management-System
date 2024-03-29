<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row g-2">
                    <div class="mb-3 col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" wire:model="password" class="form-control" id="Password">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="inputConfirmPassord" class="form-label">Confirm Password</label>
                        <input type="password"  wire:model="password_confirmation" class="form-control" id="DateOfBirth">
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
