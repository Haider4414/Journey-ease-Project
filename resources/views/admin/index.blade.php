<x-adminHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2> Admin Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"> <strong>{{ $totalusers }}+</strong></p>
                                    <p class="head_couter">Customers</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-user blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><strong>{{ $totaldrivers }}+</strong></p>
                                    <p class="head_couter">Drivers</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div>
                                    <i class="fa fa-building green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no"><strong>{{ $totalhotels }}+</strong></p>
                                    <p class="head_couter">Hotels</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row column3">
                        <div class="col-12">
                           <div class="dark_bg full margin_bottom_30">
                               <div class="full graph_head">
                                   <div class="heading1 margin_0">
                                       <h2>Hotels</h2>
                                   </div>
                               </div>
                               <div class="full graph_revenue">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="content testimonial">
                                            <div
                                                id="testimonial_slider"
                                                class="carousel slide"
                                                data-ride="carousel"
                                            >
                                                <!-- Wrapper for carousel items -->
                                                <div class="carousel-inner">
                                                    @foreach ($hotel as $index => $item)
                                                        <div class="item carousel-item {{$index === 0 ? 'active' : ''}}">
                                                            <div class="img-box">
                                                                <img
                                                                    src="{{URL::asset('uploads/hotels/'.$item->picture)}}"
                                                                    alt=""
                                                                />
                                                            </div>
                                                            <p class="testimonial">
                                                                {{$item->description}}
                                                            </p>
                                                            <p class="overview">
                                                                <b>{{$item->title}}</b>
                                                                 Founder: {{$item->fullname}}
                                                            </p>
                                                            <a
                                                                href="{{URL::to('singleHotel/'.$item->id)}}"
                                                                class="btn btn-primary mx-auto"
                                                            >
                                                                View More
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>

                                                <!-- Carousel controls -->
                                                <a
                                                    class="carousel-control left carousel-control-prev"
                                                    href="#testimonial_slider"
                                                    data-slide="prev"
                                                >
                                                    <i class="fa fa-angle-left"></i>
                                                </a>
                                                <a
                                                    class="carousel-control right carousel-control-next"
                                                    href="#testimonial_slider"
                                                    data-slide="next"
                                                >
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           </div>
                       </div>
                     </div>
                     <div class="row column4 graph">
                        <div class="col-12 margin_bottom_30">
                           <div class="dash_blog">
                              <div class="dash_blog_inner">
                                 <div class="dash_head">
                                    <h3><span><i class="fa fa-calendar"></i> Our Users</span></h3>
                                 </div>
                                 <div class="task_list_main">
                                    <div class="table_section padding_infor_info">
                                       <div class="table-responsive-sm">
                                          <table class="table">
                                             <thead>
                                                <tr>
                                                   <th>Fullname</th>
                                                   <th>Picture</th>
                                                   <th>Email</th>
                                                   <th>Phone</th>
                                                   <th>City</th>
                                                   <th>Status</th>
                                                   <th>Type</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                @foreach ($user as $us)
                                                <tr>
                                                   <td>{{$us->fullname}}</td>
                                                   <td><img src="{{URL::asset('uploads/profiles/'.$us->picture)}}" width="50px" alt=""></td>
                                                   <td>{{$us->email}}</td>
                                                   <td>{{$us->phone}}</td>
                                                   <td>{{$us->city}}</td>
                                                   <td>{{$us->status}}</td>
                                                   <td>{{$us->type}}</td>

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

                     </div>
                  </div>
                 <x-adminFooter />
