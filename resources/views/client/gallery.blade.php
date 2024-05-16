<x-header/>
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Vehicals</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <p  class="margin_0">Vehicals </p>
                  </div>
               </div>
            </div>
            
            <div class="row"> 
               @foreach ($vehicle as $v )
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img ">
                        <figure><img src="{{URL::asset('uploads/vehicals/'.$v->picture)}} " alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                       <div class="row">
                        <div class="col-12 col-md-9">
                           <a href="{{URL::to('singleVehical/'.$v->id)}}"><h3>{{$v->title}}</h3></a>
                           <p>{{$v->type}} </p>
                           <p>{{$v->price}} </p>
                        </div>
                        {{-- <div class="col-12 col-md-3">
                           <h5 class="text-success">
                              Reserved
                           </h5>
                        </div> --}}
                        
                       </div>
                       
                  </div>
                
               </div>@endforeach
               


               {{-- <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/cars/car2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <div class="row">
                           <div class="col-12 col-md-9">
                              <a href="{{URL::to('singleVehical')}}"><h3>Vehical</h3></a>
                           </div>
                           <div class="col-12 col-md-3">
                              <h5 class="text-info">
                                 Available
                              </h5>
                           </div>
                        </div>
                        <p>A luxurious car for rent </p>
                     </div>
                  </div>
               </div>

 --}}


               {{-- <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/cars/car3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <div class="row">
                           <div class="col-12 col-md-9">
                              <a href="{{URL::to('singleVehical')}}"><h3>Vehical</h3></a>
                           </div>
                           <div class="col-12 col-md-3">
                              <h5 class="text-info">
                                 Available
                              </h5>
                           </div>
                        </div>
                        <p>A luxurious car for rent </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/cars/car3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <div class="row">
                           <div class="col-12 col-md-9">
                              <a href="{{URL::to('singleVehical')}}"><h3>Vehical</h3></a>
                           </div>
                           <div class="col-12 col-md-3">
                              <h5 class="text-info">
                                 Available
                              </h5>
                           </div>
                        </div>
                        <p>A luxurious car for rent </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/cars/car4.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <div class="row">
                           <div class="col-12 col-md-9">
                              <a href="#"><h3>Vehical</h3></a>
                           </div>
                           <div class="col-12 col-md-3">
                              <h5 class="text-success">
                                 Reserved
                              </h5>
                           </div>
                        </div>
                        <p>A luxurious car for rent</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/cars/car3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <div class="row">
                           <div class="col-12 col-md-9">
                              <a href="{{URL::to('singleVehical')}}"><h3>Vehical</h3></a>
                           </div>
                           <div class="col-12 col-md-3">
                              <h5 class="text-info">
                                 Available
                              </h5>
                           </div>
                        </div>
                        <p>A luxurious car for rent</p>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
      <!-- end our_room -->
     
      <!--  footer -->
    <x-footer/>