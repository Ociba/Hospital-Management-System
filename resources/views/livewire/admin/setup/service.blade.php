<div>
    {{-- Success is as dangerous as failure. --}}
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
                <th scope="col" wire:click="sortBy('services.id')" style="cursor: pointer;">#
                    @include('partials._sort-icon',['field'=>'services.id'])
                </th>
                <th scope="col" wire:click="sortBy('services.service_name')" style="cursor: pointer;">Service
                    @include('partials._sort-icon',['field'=>'services.service_name'])
                </th>
                <th scope="col" wire:click="sortBy('services.department_id')" style="cursor: pointer;">Department
                    @include('partials._sort-icon',['field'=>'services.department_id'])
                </th>
                <th scope="col" wire:click="sortBy('services.created_by')" style="cursor: pointer;">Created By
                    @include('partials._sort-icon',['field'=>'services.created_by'])
                </th>
                <th scope="col">Option</th>
            </tr>
        </thead>
            <tbody>
                @foreach($services as $i =>$service)
                <tr>
                    <td>{{$i + 1}}</td>
                    <td><h6 class="font_12">{{$service->service_name}}</h6> </td>
                    <td><h6 class="font_12">{{@$service->department->department}}</h6> </td>
                    <td> <h6 class="font_12 p-1 mb-0">{{$service->creator->name}}</h6> </td>
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
            Showing {{$services->firstItem()}} to {{$services->lastItem()}} out of {{$services->total()}} items
        </div>
        <div class="text-right col-sm-6 mb-2">
            {{$services->links()}}
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 text-end">
            <button  class="btn btn-sm btn-bg mb-2" onclick="Livewire.dispatch('openModal', { component: 'admin.setup.add-service' })"><i class="fa fa-plus"></i> Service</button>
        </div>
    </div>
</div>
