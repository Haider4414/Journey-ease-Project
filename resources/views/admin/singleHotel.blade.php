<x-adminHeader />
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
                                    <img class="img-fluid" src="{{URL::asset('uploads/hotels/'.$hotels->picture)}}"alt=""/>
                                </div>
                                <div class="col-12 col-md-6">
                                    <p class="overview">
                                        <h1>{{$hotels->title}}</h1>
                                        Muhammad Hamza Founder
                                    </p>
                                    <p class="testimonial">
                                        {{$hotels->description}}
                                    </p>
                                    @if($hotels->status=="Active")
                                   <a href="{{URL::to('changehotelStatus/Blocked/'.$hotels->id)}}"class="btn btn-danger mx-auto">Suspend Hotel</a>
                                   @else
                                   <a href="{{URL::to('changehotelStatus/Active/'.$hotels->id)}}"class="btn btn-danger mx-auto">UnSuspend Hotel</a>
                                   @endif
                                   {{-- <button
                                        class="btn btn-danger mx-auto"
                                    >
                                        Suspend Bussiness
                                    </button> --}}
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
                                    @foreach($rooms as $p)
                                    <div class="col-sm-6 col-md-4 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('images/rooms/'.$p->picture)}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>{{$p->title}}</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>{{$p->type}}</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>{{$p->price}}</h4>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach

                                    {{-- <div class="col-sm-6 col-md-4 margin_bottom_30">
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
                                       </div>

                                    </div>
                                    <div class="col-sm-6 col-md-4 margin_bottom_30">
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
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 margin_bottom_30">
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
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 margin_bottom_30">
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
                                        </div>
                                     </div>
                                 </div> --}}
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 <x-adminFooter />
