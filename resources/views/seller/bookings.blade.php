<x-sellerHeader />
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
                                    <h2>All Bookings</h2>
                                 </div>
                              </div>
                              @if(session('success'))
                              <div class="alert alert-success">
                                 {{session('success')}}
                              </div>
                              @endif
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Full Name</th>
                                             <th>Picture</th>
                                             <th>Phone</th>
                                             <th>City</th>
                                             <th>Room</th>
                                             <th>Type</th>
                                             <th>Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        @foreach ($booking as $item)
                                          <tr>
                                             <td>{{$item->fullname}}</td>
                                             <td><img src="{{URL::asset('uploads/profiles/'.$item->picture)}}" width="50px" alt=""></td>
                                             <td>{{$item->phone}}</td>
                                             <td>{{$item->city}}</td>
                                             <td>
                                                <img src="{{URL::to('uploads/rooms/'.$item->roomp)}}" width="100px" alt="">
                                                <p>{{$item->title}}</p>
                                             </td>
                                             <td>{{$item->bookingtype}}</td>
                                             <td>
                                                @if($item->status=='Pending')
                                                    <a href="{{URL::to('changebookingstatus/'.$item->id)}}" class="btn btn-success">confirm booking</a>

                                                @else
                                                <a href="" class="btn btn-info ">Reserved</a>
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
                 <x-sellerFooter />
