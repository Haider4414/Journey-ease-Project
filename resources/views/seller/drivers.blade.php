<x-sellerHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Drivers</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>All Drivers</h2>
                                 </div>
                                  <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Add New Driver</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form  action="{{URL::to('registerdriver')}}" method="post" enctype="multipart/form-data" id="request" class="main_form">
                                                  @csrf
                                                   <div class="row">
                                                       {{-- <div class="col-md-12">
                                                         <select name="vehicleId" id="" class="form-control mb-2">
                                                            <option value="">select vehicle</option>
                                                            @foreach ($user as  $u)
                                                            <option value="{{$u->id}}">{{$u->fullname}}</option>
                                                            @endforeach
                                                      </select> --}}
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2"  placeholder="Name" type="text" name="fullname">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="Phone" type="text" name="phone">
                                                       </div>
                                                       <div class="col-md-12">
                                                           <label for="">Porfile Picture</label>
                                                          <input class="form-control mb-2"  type="file" name="file">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="city" type="text" name="city">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="type" type="text" name="type">
                                                       </div>

                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="cnic" type="text" name="cnic">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="ntn" type="number" name="ntn">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="area" type="text" name="area">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="areacode" type="number" name="areacode">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="Email" type="email" name="email">
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="Password" type="password" name="password">
                                                       </div>

                                                       <div class="col-md-12">
                                                          <button type="submit" class="btn btn-success">Add New</button>
                                                       </div>
                                                    </div>
                                                 </form>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#myModal">
                                    Add New
                                  </button>
                                 <div class="table-responsive-sm">

                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>FullName</th>
                                             <th>Picture</th>
                                             <th>Email</th>
                                             <th>Phone</th>
                                             <th>City</th>
                                             {{-- <th>Vehical</th> --}}
                                             <th>Status</th>
                                             <th>Type</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($user as $u )
                                          <tr>
                                             <td>{{$u->fullname}}</td>
                                             <td><img src="{{URL::asset('uploads/profiles/'.$u->picture)}}" width="50px" alt=""></td>
                                             <td>{{$u->email}}</td>
                                             <td>{{$u->phone}}</td>
                                             <td>{{$u->city}}</td>
                                             {{-- <td>
                                                 @if ($vehicle)
                                                {{$vehicle->title}}
                                            @else
                                                No Vehicle
                                            @endif --}}
                                          </td>
                                             <td>{{$u->status}}</td>
                                             <td>{{$u->type}}</td>
                                             <td>
                                                @if($u->status=='Active')
                                                <a href="{{URL::to('changeStatus/Blocked/'.$u->id)}}" class="btn btn-danger">Block Now</a>
                                                @else
                                                <a href="{{URL::to('changeStatus/Active/'.$u->id)}}" class="btn btn-success">Un Block</a>
                                                @endif
                                            </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                 <x-adminFooter />
