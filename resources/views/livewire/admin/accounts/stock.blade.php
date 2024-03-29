<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row analytic_1 mb-4">
        <div class="col-md-3">
            <div class="analytic_1l">
                <select class="form-control mb-2" wire:model='perPage'>
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    <option>40</option>
                    <option>50</option>
                    <option>60</option>
                </select>
            </div>
        </div>
        <div class="col-md-9">
            <div class="analytic_1r pull-right mr-0">
                <div class="input-group">
                    <input type="text" wire:model.debounce.300ms="search" class="form-control form_2"  placeholder="Search Here...">
                    <span class="input-group-btn">
                    <button class="btn btn-primary bg_1" type="button">
                    <i class="fa fa-search cal_2"></i></button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive table_tow">
        <table class="table table-responsive table-hover  p-0 m-0">
        <thead>
            <tr>
                <th scope="col" wire:click="sortBy('users.id')" style="cursor: pointer;">#
                    @include('partials._sort-icon',['field'=>'users.id'])
                </th>
                <th scope="col" wire:click="sortBy('users.name')" style="cursor: pointer;">Name
                    @include('partials._sort-icon',['field'=>'users.name'])
                </th>
                <th scope="col" wire:click="sortBy('users.email')" style="cursor: pointer;">Email
                    @include('partials._sort-icon',['field'=>'users.email'])
                </th>
                <th scope="col" wire:click="sortBy('users.user_type')" style="cursor: pointer;">User Type
                    @include('partials._sort-icon',['field'=>'users.user_type'])
                </th>
                <th scope="col">Option</th>
            </tr>
        </thead>
            <tbody>
                @foreach($users as $i =>$user)
                <tr>
                    <td>{{$i + 1}}</td>
                    <td><h6 class="font_12">{{$user->name}}</h6> </td>
                    <td> <h6 class="font_12 p-1 mb-0">{{$user->email}}</h6> </td>
                    <td> <h6 class="font_12 mb-0">{{$user->user_type}}</h6> </td>
                    <td>
                        <h6 data-bs-toggle="tooltip" data-bs-placement="left"
                            data-bs-original-title="Edit" class="d-inline-block mb-0"><a
                            href="#"><i style="vertical-align:middle; margin-right:5px;"
                            class="fa fa-edit col_3"></i></a></h6>
                        <h6 data-bs-toggle="tooltip" data-bs-placement="right"
                            data-bs-original-title="Delete" class="d-inline-block mb-0"><a
                            href="#"><i class="fa fa-trash col_3"></i></a></h6>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-sm-6 mb-2">
            Showing {{$users->firstItem()}} to {{$users->lastItem()}} out of {{$users->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$users->links()}}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 text-end">
            <button  class="btn btn-sm btn-button mb-2" onclick="Livewire.emit('openModal', 'admin.setup.add-user-type')"><i class="fa fa-plus"></i> Stock</button>
        </div>
    </div>
</div>
