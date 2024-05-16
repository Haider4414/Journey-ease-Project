   <x-sellerHeader />
                  <!-- dashboard inner -->
                  <div class="midde_cont">
                     <div class="container-fluid">
                        <div class="row column_title">
                           <div class="col-md-12">
                              <div class="page_title">
                                 <h2>Hotel</h2>
                              </div>
                           </div>
                        </div>
                        @if(session('success'))
                                       <div class="alert alert-success">
                                          {{session('success')}}
                                       </div>
                                       @endif
                        <!-- row -->
                        <div class="row">
                           <!-- table section -->
                           <div class="col-md-12">
                              <div class="white_shd full margin_bottom_30">
                                 <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                       <h2>Hotel Details</h2>
                                    </div>
                                    <div class="col-6 mx-auto">
                                       @if (!$hotel)
                                       <button type="button" class="btn btn-primary ml-3 " data-toggle="modal" data-target="#myModal">
                                          Add New
                                       </button>
                                       @endif
                                       <!-- The Modal -->
                                          <div class="modal" id="myModal">
                                             <div class="modal-dialog">
                                             <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                   <h4 class="modal-title text-dark">Add hotel</h4>
                                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                   <form action="{{URL::to('addhotel')}}" method="POST" enctype="multipart/form-data">
                                                   @csrf
                                                      <label for="">
                                                         Title
                                                      </label>
                                                      <input type="text" name="title" class="form-control" placeholder="enter the title"  id="">
                                                      <label for="">
                                                         area
                                                      </label>
                                                      <input type="text" name="area" class="form-control" placeholder="enter the area"  id="">
                                                      <label for="">
                                                         description
                                                      </label>
                                                      <input type="text" name="description" class="form-control" placeholder="enter the description"  id="">
                                                      <label for="">
                                                         city
                                                      </label>
                                                      <input type="text" name="city" class="form-control" placeholder="enter the city" id="">
                                                      <label for="">
                                                         Area Code
                                                      </label>
                                                      <input type="number" name="areacode" class="form-control" placeholder="enter the areacode" id="">
                                                      <label for="">
                                                         add  Picture
                                                      </label>
                                                      <input type="file" name="file" class="form-control"  id="">
                                                      <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
                                                   </form>
                                                </div>
                                             </div>
                                             </div>
                                          </div>
                                    </div>
                                 </div>                                 
                              <div class="row">
                                 <div class="col-12 col-md-6">
                                       <img class="img-fluid" src="{{URL::asset('uploads/hotels/'.$hotel->picture)}}" alt=""/>
                                 </div>
                                 <div class="col-12 col-md-6">
                                       <p class="overview">
                                          <h1>{{$hotel->title}}</h1>
                                       </p>
                                       <p class="overview">
                                          <h1>{{$hotel->area}}</h1>
                                       </p>
                                       <p class="testimonial">
                                          {{$hotel->description}}
                                       </p>
                                       <p class="testimonial">
                                          {{$hotel->city}}
                                       </p>
                                       @if ($hotel)
                                       <button type="button" class="btn btn-primary ml-3 " data-toggle="modal" data-target="#updateModal">
                                          Update
                                       </button>
                                       @endif

                                       <div class="modal" id="updateModal">
                                          <div class="modal-dialog">
                                          <div class="modal-content">


                                             <div class="modal-header">
                                                <h4 class="modal-title text-dark">Update hotel</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>


                                             <div class="modal-body">
                                                <form action="{{URL::to('updatehotel')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                   <label for="">
                                                      Title
                                                   </label>
                                                   <input type="text" name="title" class="form-control" value="{{$hotel->title}}"  id="">
                                                   <label for="">
                                                      area
                                                   </label>
                                                   <input type="text" name="area" class="form-control" value="{{$hotel->area}}"  id="">
                                                   <label for="">
                                                      description
                                                   </label>
                                                   <input type="text" name="description" class="form-control" value="{{$hotel->description}}"  id="">
                                                   <label for="">
                                                      city
                                                   </label>
                                                   <input type="text" name="city" class="form-control" value="{{$hotel->city}}" id="">
                                                   <label for="">
                                                      Area Code
                                                   </label>
                                                   <input type="number" name="areacode" class="form-control" value="{{$hotel->areaCode}}" id="">
                                                   <label for="">
                                                      New   Picture
                                                   </label>
                                                   <input type="file" name="file" class="form-control"  id="">
                                                   <input type="hidden" name="id" value="{{$hotel->id}}" class="form-control"  id="">
                                                   <input type="submit" name="update" value="Save Changes" class="mt-2 btn btn-secondary" id="">
                                                </form>
                                             </div>
                                          </div>
                                          </div>
                                       </div>

                                       <button type="button" class="btn btn-primary ml-3 " data-toggle="modal" data-target="#addroom">
                                          Add room
                                       </button>
                                       <div class="modal" id="addroom">
                                          <div class="modal-dialog">
                                          <div class="modal-content">


                                             <div class="modal-header">
                                                <h4 class="modal-title text-dark">Add Room</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>


                                             <div class="modal-body">
                                                <form action="{{URL::to('addrooms')}}" method="POST" enctype="multipart/form-data">
                                                   @csrf
                                                   <label for="" class="mt-2">
                                                      Title
                                                   </label>
                                                   <input type="text" name="title" class="form-control" placeholder="Enter the title"  id="">
                                                   <label for=""  class="mt-2" >
                                                      type
                                                   </label>
                                                   <input type="text" name="type" class="form-control" placeholder="Enter the type"  id="">
                                                   <label for=""  class="mt-2">
                                                   price
                                                   </label>
                                                   <input type="number"  id=" price" name="price" class="form-control" placeholder="Enter the price" id="">
                                                   <label for=""  class="mt-2">
                                                   Add  Picture
                                                   </label>
                                                   <input type="file" name="file" class="form-control mb-2"  id="">
                                                   <label for=""  class="mt-2">
                                                      Extra services
                                                   </label>
                                                   <input type="text" name="extraservices" class="form-control" placeholder="enter the extraservices"  id="">
                                                   <input type="hidden" name="hotelId" value="{{$hotel->id}}" class="form-control"  id="">
                                                   <input type="submit" name="save" value="add record" class="mt-2 btn btn-secondary" id="">
                                                </form>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                       <button type="button" class="btn btn-primary ml-3 " data-toggle="modal" data-target="#addvehicle">
                                          Add vehicle
                                       </button>
                                       <div class="modal" id="addvehicle">
                                          <div class="modal-dialog">
                                          <div class="modal-content">


                                             <div class="modal-header">
                                                <h4 class="modal-title text-dark">Add vehicles</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>


                                             <div class="modal-body">
                                                <form action="{{URL::to('addnewVehicle')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                   <label for="">
                                                      Title
                                                   </label>
                                                   <input type="text" name="title" class="form-control" placeholder="enter the title"  id="">
                                                   <label for="">
                                                      Type
                                                   </label>
                                                   <input type="text" name="type" class="form-control" placeholder="enter the type"  id="">

                                                   <label for="">
                                                      Price
                                                   </label>
                                                   <input type="number" name="price" class="form-control" placeholder="enter the price" id="">
                                                   <label for="">
                                                      add  Picture
                                                   </label>
                                                   <input type="file" name="file" class="form-control"  id="">

                                                   <select name="driverId" id="" class="form-control mb-2">
                                                      <option value="">select driver</option>
                                                      @foreach ($user as  $u)
                                                      <option value="{{$u->id}}">{{$u->fullname}}</option>
                                                      @endforeach
                                                </select>

                                                   <input type="hidden" name="hotelId" value="{{$hotel->id}}" class="form-control"  id="">
                                                   <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
                                                </form>
                                             </div>
                                          </div>
                                          </div>
                                       </div>
                                 </div>
                              </div>

                              </div>
                           </div>

                        </div>








                        <div class="row column4 graph">
                           <!-- Gallery section -->
                           <div class="col-md-12">
                              <div class="white_shd full margin_bottom_30">
                                 <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                       <h2>Rooms</h2>
                                    </div>
                                 </div>
                                 <div class="full gallery_section_inner padding_infor_info">
                                    <div class="row">
                                       @foreach ($rooms as $r )
                                       <div class="col-sm-6   margin_bottom_30">
                                          <div class="column">
                                             <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('uploads/rooms/'.$r->picture)}}" alt="#" /></a>
                                          </div>
                                          <div class="heading_section">
                                             <div class="row">
                                             <div class="col-4">
                                                   <h4>{{$r->title}}</h4>
                                             </div>
                                             <div class="col-4">
                                                   <h4>{{$r->type}}</h4>
                                             </div>
                                             <div class="col-4">
                                                   <h4>{{$r->price}}.Rs/day</h4>
                                             </div>
                                             </div>
                                             <div class="row mt-1 mb-1 mx-auto">
                                             <div class="col-6 mx-auto">
                                                <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#editroom">
                                                   Edit Details
                                                </button>
                                                <div class="modal" id="editroom">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">

                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                         <h4 class="modal-title text-dark">update Room</h4>
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>

                                                      <!-- Modal body -->
                                                      <div class="modal-body">
                                                         <form action="{{URL::to('updaterooms')}}" method="POST" enctype="multipart/form-data">
                                                         @csrf
                                                            <label for="">
                                                               Title
                                                            </label>
                                                            <input type="text" name="title" class="form-control" value="{{$r->title}}"  id="">
                                                            <label for="">
                                                               type
                                                            </label>
                                                            <input type="text" name="type" class="form-control"   value="{{$r->type}}" id="">
                                                            <label for="">
                                                         price
                                                            </label>
                                                            <input type="number" name="price" class="form-control" value="{{$r->price}}" id="">

                                                            <label for="">
                                                         New  Picture
                                                            </label>
                                                            <input type="file" name="file" class="form-control"  id="">
                                                            <input type="hidden" name="id" value="{{$r->id}}" class="form-control"  id="">
                                                            <input type="submit" name="save" value="update changes" class="mt-2 btn btn-secondary" id="">
                                                         </form>
                                                      </div>
                                                   </div>
                                                   </div>
                                                </div>

                                             </div>
                                             <div class="col-6">
                                                   <a href="{{URL::to('deleteroom/'.$r->id)}}" class="btn btn-danger mb-2 btn-block">Delete</a>

                                             </div>

                                             </div>
                                          </div>

                                       </div>
                                       @endforeach
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     
                     <x-sellerFooter />
