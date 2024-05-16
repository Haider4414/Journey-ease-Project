<x-adminHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Media Gallery</h2>
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
                              @foreach($vehicle as $item)
                              <div class="full gallery_section_inner padding_infor_info">
                                 <div class="row">
                                    <div class="col-sm-6 col-md-6 margin_bottom_30">
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('uploads/vehicals/'.$item->picture)}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>{{$item->title}}</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>Driver<br>Muhammad Ali</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>{{$item->price}}</h4>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
   
                                    {{-- <div class="col-sm-6 col-md-6 margin_bottom_30">
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
                                       </div>
                                    </div> --}}
                                 </div>
                              </div>
@endforeach
                           </div>
                        </div>
                     </div>
                     <x-adminFooter />