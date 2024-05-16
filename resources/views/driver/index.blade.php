<x-driverHeader />
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
                        
                        <div class="col-md-6 ">
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
                       
                       
                        
                        <div class="col-md-6">
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
                                   
                                    <a href="{{URL::to('driverBookings')}}"  class="btn btn-primary ml-3 " >
                                       View Bookings
                                    </a>
                                   
                                </div>
                               
                             </div>
                           
                           </div>
                        </div>
                     </div>
                     
                  </div>
                 <x-sellerFooter />