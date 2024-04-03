<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="row profile_1 mt-2">
        <div class="col-xl-4">
            <div class="profile_1l bg-white p-4">
                <div class="profile_1li text-center">
                    @foreach($my_details as $detail)
                    <div class="row">
                        <div class="col-xl-3">

                        </div>
                        <div class="col-xl-6 text-center ml-3">
                        <img src="{{ asset('storage/patient/image/'.@$detail->image)}}" style="width:100px; width:120px" class="rounded-circle">
                        </div>
                        <div class="col-xl-3">
                        
                        </div>
                    </div>
                    <h5 class="mt-2">{{$detail->first_name}}</h5>
                    <h6 class="col_3">{{$detail->creator->user_type}}</h6>
                    <ul class="mt-3">
                        <li class="d-inline-block"><a class="buttton" href="#">Follow</a></li>
                        <li class="d-inline-block"><a class="buttton_1" href="#">Message</a></li>
                    </ul>
                    @endforeach
                </div>
                <div class="profile_1li1 mt-4">
                    @foreach($my_details as $detail)
                    <h6 class="font_14">Full Name : <span class="col_3">{{$detail->last_name}} {{$detail->first_name}} {{$detail->other_names}}</span></h6>
                    <h6 class="font_14">Mobile : <span class="col_3">{{$detail->phone_number}}</span></h6>
                    <h6 class="font_14">Email : <span class="col_3">{{$detail->creator->email}}</span></h6>
                    <h6 class="font_14">Location : <span class="col_3">{{$detail->home_district}}</span></h6>
                    @endforeach
                </div>
                <div class="profile_1li2 mt-4 text-center">
                    <ul class="social-network social-circle mb-0">
                        <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="profile_1l1 mt-4 bg-white p-4">
                <div class="card">
                    <div class="card-header">
                        <h6 style="padding-top:2px;" class="d-inline-block mb-0">MESSAGES</h6>
                        <div class="dropdown d-inline-block pull-right">
                            <button class="border-0 bgn" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-ellipsis-v"></i>
                            </button>
                            <ul class="dropdown-menu drop_card" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Action</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive table-borderless p-0 m-0 align-middle">
                            <tbody>
                                <tr>
                                    <td><img src="img/1.jpg" alt="abc" width="40" height="40" class="rounded-circle">
                                    </td>
                                    <td><span style="font-weight:bold;">Tomaslau</span><br>I've finished it! See you
                                        so...</td>
                                    <td><a class="col_1" href="#">Reply</a></td>
                                </tr>
                                <tr>
                                    <td><img src="img/7.jpg" alt="abc" width="40" height="40" class="rounded-circle">
                                    </td>
                                    <td><span style="font-weight:bold;">Tomaslau</span><br>I've finished it! See you
                                        so...</td>
                                    <td><a class="col_1" href="#">Reply</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="profile_1r p-4 bg-white">
                <div class="profile_1r1">
                    <ul class="nav nav-tabs prof_tab mb-4 border-0 bg-light" id="myTab" role="tablist">
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="home_in4">
                        <h6><i style="margin-right:5px;" class="fa fa-user"></i> PERSONAL INFO</h6>
                        @foreach($my_details as $detail)
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Gender</h6>
                                        <input class="form-control" placeholder="" type="text" value="{{$detail->gender}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Date of Birth</h6>
                                        <input class="form-control" placeholder="" type="text" value="{{$detail->date_of_birth}}">
                                    </div>
                                </div>
                            </div>
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">National ID Number</h6>
                                        <input class="form-control" placeholder="" type="text" value="{{$detail->national_id_number}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Home Distrct</h6>
                                        <input class="form-control" placeholder="" type="text" value="{{$detail->home_district}}">
                                    </div>
                                </div>
                            </div>
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">District Of Residence</h6>
                                        <input class="form-control" placeholder="" type="text" value="{{$detail->district_of_residence}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">County</h6>
                                        <input class="form-control" placeholder="" type="text" value="{{$detail->county}}">
                                    </div>
                                </div>
                            </div>
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Subcounty</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->sub_county}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Parish</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->parish}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Village</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->village}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Category</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->category}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Next Of Kin</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->next_of_kin}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Next of Kin Contact</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->next_of_kin_contact}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Next Of Kin Contact</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->next_of_kin_contact}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="home_in4il">
                                        <h6 class="font_14">Next of Kin Relationship</h6>
                                        <div class="input-group">
                                            <input type="text" placeholder="" class="form-control"
                                                aria-label="Text input with checkbox" value="{{$detail->next_of_kin_relationship}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="home_in4i mt-3 row">
                                <div class="col-md-12">
                                    <div class="home_in4il" style="text-align:right;">
                                        <h6 class="mb-0"><a class="buttton_1" href="#">Save <i
                                                    class="fa fa-file"></i></a></h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>