<x-adminHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>{{$type}}</h2>
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
                                    <h2>All {{$type}}</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Full Name</th>

                                             <th>Picture</th>
                                             <th>Email</th>
                                             <th>Phone</th>
                                             <th>Country</th>
                                             <th>Status</th>
                                             <th>Type</th>
                                             <th>Action</th>
                                             @if($type=='Seller')
                                             <th>
                                                View Hotels
                                             </th>
                                             @elseif($type=='Driver')
                                             <th>
                                                View Vehicals
                                             </th>
                                             @endif
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach ($users as $item)
                                          <tr>
                                             <td>{{$item->fullname}}</td>
                                             <td><img src="{{URL::asset('uploads/profiles/'.$item->picture)}}" width="50px" alt=""></td>
                                             <td>{{$item->email}}</td>
                                             <td>{{$item->phone}}</td>
                                             <td>{{$item->city}}</td>
                                             <td>{{$item->status}}</td>
                                             <td>{{$item->type}}</td>
                                             <td>
                                                @if($item->status=='Pending')
                                                <a href="{{URL::to('changeUserStatus/Active/'.$item->id)}}" class="btn btn-success">Approve Now</a>
                                                @elseif($item->status=='Active')
                                                <a href="{{URL::to('changeUserStatus/Blocked/'.$item->id)}}" class="btn btn-danger">Block Now</a>
                                                @else
                                                <a href="{{URL::to('changeUserStatus/Active/'.$item->id)}}" class="btn btn-success">Un Block</a>
                                                @endif
                                             </td>
                                             @if($type=='Seller')
                                             <td>
                                                <a href="{{URL::to('hotels')}}" class="btn btn-info">View Details</a>
                                             </td>
                                             @elseif($type=='Driver')
                                             <td>
                                                <a href="{{URL::to('vehicals')}}" class="btn btn-info">Vehicals</a>
                                             </td>
                                             @endif
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
