<x-sellerHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Vehicals</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column4 graph">
                        <!-- Gallery section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>All Vehicals</h2>
                                 </div>
                              </div>
                              <div class="full gallery_section_inner padding_infor_info">
                                 <div class="row">
                                    <div class="col-sm-6 col-md-6 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/cars/car1.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Audi</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>Driver<br>Muhammad Ali</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>5000.Rs/Day</h4>
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
                                    
                                    <div class="col-sm-6 col-md-6 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/cars/car2.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>BMW</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>Driver<br>Muhammad Ali</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>5000.Rs/Day</h4>
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
                                     
                                    <div class="col-sm-6 col-md-6 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/cars/car3.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Nissan GTR</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>Driver<br>Muhammad Ali</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>5000.Rs/Day</h4>
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
                                     
                                    <div class="col-sm-6 col-md-6 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/cars/car8.jpg')}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>Audi</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>Driver<br>Muhammad Ali</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>5000.Rs/Day</h4>
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
                     </div>
                     <x-sellerFooter />