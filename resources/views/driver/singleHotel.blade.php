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
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Hotel Details</h2>
                                 </div>
                              </div>
                             <div class="row">
                                <div class="col-12 col-md-6">
                                    <img class="img-fluid" src="{{URL::asset('images/rooms/room1.jpg')}}"alt=""/>
                                </div>
                                <div class="col-12 col-md-6">
                                    <p class="overview">
                                        <h1>XYZ Hotel</h1>
                                        Muhammad Hamza Founder
                                    </p>
                                    <p class="testimonial">
                                        Our spacious room is
                                        designed to provide you with
                                        the perfect blend of comfort
                                        and style, featuring a plush
                                        queen-size bed with crisp
                                        linens and fluffy pillows
                                        that will ensure a restful
                                        night's sleep.
                                    </p>
                                   
                                    <button
                                        class="btn btn-info mx-auto"
                                    >
                                        Edit Bussiness
                                    </button>
                                    <button type="button" class="btn btn-primary ml-3 " data-toggle="modal" data-target="#listing">
                                       New Listing
                                     </button>
                                     <!-- The Modal -->
                                       <div class="modal" id="listing">
                                          <div class="modal-dialog">
                                          <div class="modal-content">
                                       
                                             <!-- Modal Header -->
                                             <div class="modal-header">
                                                <h4 class="modal-title text-dark">Listing Details</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>
                                       
                                             <!-- Modal body -->
                                             <div class="modal-body">
                                                <form action="">
                                                   <label for="">
                                                      Room#
                                                   </label>
                                                   <input type="text" name="number" class="form-control" placeholder="Room#"  id="">
                                                   <label for="">
                                                      Category
                                                   </label>
                                                   <input type="text" name="category" class="form-control" placeholder="Room#"  id="">
                                                   <label for="">
                                                      Price
                                                   </label>
                                                   <input type="text" name="price" class="form-control" placeholder="Price"  id="">
                                                   <label for="">
                                                      Features
                                                   </label>
                                                   <input type="text" name="features" class="form-control" placeholder="WIFI,TV etc"  id="">
                                                   <label for="">
                                                      New Picture
                                                   </label>
                                                   <input type="file" name="file" class="form-control"  id="">
                                                   <input type="submit" name="save" value="List Room" class="mt-2 btn btn-secondary" id="">
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
                                    <div class="col-sm-6   margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/rooms/room1.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Room#1</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>A+</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>500.Rs</h4>
                                            </div>
                                          </div>
                                          <div class="row mt-1 mb-1 mx-auto">
                                            <div class="col-6 mx-auto">
                                             <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">
                                                Edit Details
                                              </button>
                                              <!-- The Modal -->
                                                <div class="modal" id="myModal">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">
                                                
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                         <h4 class="modal-title text-dark">Edit Details</h4>
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                                                
                                                      <!-- Modal body -->
                                                      <div class="modal-body">
                                                         <form action="">
                                                            <label for="">
                                                               Room#
                                                            </label>
                                                            <input type="text" name="number" class="form-control" placeholder="Room#" value="Room#1" id="">
                                                            <label for="">
                                                               Category
                                                            </label>
                                                            <input type="text" name="category" class="form-control" placeholder="Room#" value="A+" id="">
                                                            <label for="">
                                                               Price
                                                            </label>
                                                            <input type="text" name="price" class="form-control" placeholder="Price" value="4000" id="">
                                                            <label for="">
                                                               Features
                                                            </label>
                                                            <input type="text" name="features" class="form-control" placeholder="WIFI,TV etc" value="Wifi" id="">
                                                            <label for="">
                                                               New Picture
                                                            </label>
                                                            <input type="file" name="file" class="form-control"  id="">
                                                            <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
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
                                            <div class="col-6">
                                                <a href="" class="btn btn-danger mb-2 btn-block">Delete</a>
                                            </div>
                                            
                                          </div>
                                       </div>

                                    </div>







                                    <div class="col-sm-6   margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/rooms/room2.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Room#2</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>A+</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>500.Rs</h4>
                                            </div>
                                            
                                          </div>
                                          <div class="row mt-1 mb-1 mx-auto">
                                            <div class="col-6 mx-auto">
                                             <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">
                                                Edit Details
                                              </button>
                                              <!-- The Modal -->
                                                <div class="modal" id="myModal">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">
                                                
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                         <h4 class="modal-title text-dark">Edit Details</h4>
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                                                
                                                      <!-- Modal body -->
                                                      <div class="modal-body">
                                                         <form action="">
                                                            <label for="">
                                                               Room#
                                                            </label>
                                                            <input type="text" name="number" class="form-control" placeholder="Room#" value="Room#1" id="">
                                                            <label for="">
                                                               Category
                                                            </label>
                                                            <input type="text" name="category" class="form-control" placeholder="Room#" value="A+" id="">
                                                            <label for="">
                                                               Price
                                                            </label>
                                                            <input type="text" name="price" class="form-control" placeholder="Price" value="4000" id="">
                                                            <label for="">
                                                               Features
                                                            </label>
                                                            <input type="text" name="features" class="form-control" placeholder="WIFI,TV etc" value="Wifi" id="">
                                                            <label for="">
                                                               New Picture
                                                            </label>
                                                            <input type="file" name="file" class="form-control"  id="">
                                                            <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
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
                                            <div class="col-6">
                                                <a href="" class="btn btn-danger mb-2 btn-block">Delete</a>
                                            </div>
                                            
                                          </div>
                                       </div>

                                    </div>







                                    <div class="col-sm-6   margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/rooms/room3.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Room#3</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>A+</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>500.Rs</h4>
                                            </div>
                                          </div>
                                          <div class="row mt-1 mb-1 mx-auto">
                                            <div class="col-6 mx-auto">
                                             <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">
                                                Edit Details
                                              </button>
                                              <!-- The Modal -->
                                                <div class="modal" id="myModal">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">
                                                
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                         <h4 class="modal-title text-dark">Edit Details</h4>
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                                                
                                                      <!-- Modal body -->
                                                      <div class="modal-body">
                                                         <form action="">
                                                            <label for="">
                                                               Room#
                                                            </label>
                                                            <input type="text" name="number" class="form-control" placeholder="Room#" value="Room#1" id="">
                                                            <label for="">
                                                               Category
                                                            </label>
                                                            <input type="text" name="category" class="form-control" placeholder="Room#" value="A+" id="">
                                                            <label for="">
                                                               Price
                                                            </label>
                                                            <input type="text" name="price" class="form-control" placeholder="Price" value="4000" id="">
                                                            <label for="">
                                                               Features
                                                            </label>
                                                            <input type="text" name="features" class="form-control" placeholder="WIFI,TV etc" value="Wifi" id="">
                                                            <label for="">
                                                               New Picture
                                                            </label>
                                                            <input type="file" name="file" class="form-control"  id="">
                                                            <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
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
                                            <div class="col-6">
                                                <a href="" class="btn btn-danger mb-2 btn-block">Delete</a>
                                            </div>
                                            
                                          </div>
                                       </div>

                                    </div>




                                    <div class="col-sm-6   margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/rooms/room4.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Room#4</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>A+</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>500.Rs</h4>
                                            </div>
                                          </div>
                                          <div class="row mt-1 mb-1 mx-auto">
                                            <div class="col-6 mx-auto">
                                             <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">
                                                Edit Details
                                              </button>
                                              <!-- The Modal -->
                                                <div class="modal" id="myModal">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">
                                                
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                         <h4 class="modal-title text-dark">Edit Details</h4>
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                                                
                                                      <!-- Modal body -->
                                                      <div class="modal-body">
                                                         <form action="">
                                                            <label for="">
                                                               Room#
                                                            </label>
                                                            <input type="text" name="number" class="form-control" placeholder="Room#" value="Room#1" id="">
                                                            <label for="">
                                                               Category
                                                            </label>
                                                            <input type="text" name="category" class="form-control" placeholder="Room#" value="A+" id="">
                                                            <label for="">
                                                               Price
                                                            </label>
                                                            <input type="text" name="price" class="form-control" placeholder="Price" value="4000" id="">
                                                            <label for="">
                                                               Features
                                                            </label>
                                                            <input type="text" name="features" class="form-control" placeholder="WIFI,TV etc" value="Wifi" id="">
                                                            <label for="">
                                                               New Picture
                                                            </label>
                                                            <input type="file" name="file" class="form-control"  id="">
                                                            <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
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
                                            <div class="col-6">
                                                <a href="" class="btn btn-danger mb-2 btn-block">Delete</a>
                                            </div>
                                            
                                          </div>
                                       </div>

                                    </div>



                                    <div class="col-sm-6   margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/rooms/room6.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Room#5</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>A+</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>500.Rs</h4>
                                            </div>
                                          </div>
                                          <div class="row mt-1 mb-1 mx-auto">
                                            <div class="col-6 mx-auto">
                                             <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">
                                                Edit Details
                                              </button>
                                              <!-- The Modal -->
                                                <div class="modal" id="myModal">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">
                                                
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                         <h4 class="modal-title text-dark">Edit Details</h4>
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                                                
                                                      <!-- Modal body -->
                                                      <div class="modal-body">
                                                         <form action="">
                                                            <label for="">
                                                               Room#
                                                            </label>
                                                            <input type="text" name="number" class="form-control" placeholder="Room#" value="Room#1" id="">
                                                            <label for="">
                                                               Category
                                                            </label>
                                                            <input type="text" name="category" class="form-control" placeholder="Room#" value="A+" id="">
                                                            <label for="">
                                                               Price
                                                            </label>
                                                            <input type="text" name="price" class="form-control" placeholder="Price" value="4000" id="">
                                                            <label for="">
                                                               Features
                                                            </label>
                                                            <input type="text" name="features" class="form-control" placeholder="WIFI,TV etc" value="Wifi" id="">
                                                            <label for="">
                                                               New Picture
                                                            </label>
                                                            <input type="file" name="file" class="form-control"  id="">
                                                            <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
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
                                            <div class="col-6">
                                                <a href="" class="btn btn-danger mb-2 btn-block">Delete</a>
                                            </div>
                                            
                                          </div>
                                       </div>

                                    </div>
                                   




                                    
                                    <div class="col-sm-6   margin_bottom_30">
                                        <div class="column">
                                           <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/rooms/room5.jpg')}}" alt="#" /></a>
                                        </div>
                                        <div class="heading_section">
                                           <div class="row">
                                             <div class="col-4">
                                                 <h4>Room#6</h4>
                                             </div>
                                             <div class="col-4">
                                                 <h4>A+</h4>
                                             </div>
                                             <div class="col-4">
                                                 <h4>500.Rs</h4>
                                             </div>
                                          </div>
                                          <div class="row mt-1 mb-1 mx-auto">
                                            <div class="col-6 mx-auto">
                                             <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">
                                                Edit Details
                                              </button>
                                              <!-- The Modal -->
                                                <div class="modal" id="myModal">
                                                   <div class="modal-dialog">
                                                   <div class="modal-content">
                                                
                                                      <!-- Modal Header -->
                                                      <div class="modal-header">
                                                         <h4 class="modal-title text-dark">Edit Details</h4>
                                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                                                
                                                      <!-- Modal body -->
                                                      <div class="modal-body">
                                                         <form action="">
                                                            <label for="">
                                                               Room#
                                                            </label>
                                                            <input type="text" name="number" class="form-control" placeholder="Room#" value="Room#1" id="">
                                                            <label for="">
                                                               Category
                                                            </label>
                                                            <input type="text" name="category" class="form-control" placeholder="Room#" value="A+" id="">
                                                            <label for="">
                                                               Price
                                                            </label>
                                                            <input type="text" name="price" class="form-control" placeholder="Price" value="4000" id="">
                                                            <label for="">
                                                               Features
                                                            </label>
                                                            <input type="text" name="features" class="form-control" placeholder="WIFI,TV etc" value="Wifi" id="">
                                                            <label for="">
                                                               New Picture
                                                            </label>
                                                            <input type="file" name="file" class="form-control"  id="">
                                                            <input type="submit" name="save" value="Save Changes" class="mt-2 btn btn-secondary" id="">
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
                                            <div class="col-6">
                                                <a href="" class="btn btn-danger mb-2 btn-block">Delete</a>
                                            </div>
                                            
                                          </div>
                                       </div>

                                    </div>



                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 <x-sellerFooter />