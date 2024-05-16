<x-sellerHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-clock-o blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">50+</p>
                                    <p class="head_couter">Bookings</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">2500+</p>
                                    <p class="head_couter">Customers</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-building green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">54+</p>
                                    <p class="head_couter">Rooms & Vehicals</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-dollar red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">50000 $</p>
                                    <p class="head_couter">Earning</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                     </div>
                    
                     <div class="row column3">
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
                     <div class="row column3">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Vehical Details</h2>
                                 </div>
                              </div>
                             <div class="row">
                              <div class="col-12 col-md-6">
                                 <img class="img-fluid" src="{{URL::asset('images/cars/car1.jpg')}}"alt=""/>
                             </div>
                                <div class="col-12 col-md-6">
                                    <p class="overview">
                                        <h1>Audi</h1>
                                        Muhammad Hamza Driver
                                    </p>
                                    <p class="testimonial">
                                       Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus eius unde debitis at nisi. Repudiandae, corporis eveniet! Saepe dicta veritatis quis! Sunt aliquid voluptate sapiente rem veniam sit laboriosam error!
                                    </p>
                                   
                                    <a href="{{URL::to('vehicals')}}"  class="btn btn-primary ml-3 " >
                                       All Vehicals
                                    </a>
                                   
                                </div>
                               
                             </div>
                           
                           </div>
                        </div>
                     </div>
                     
                  </div>
                 <x-sellerFooter />