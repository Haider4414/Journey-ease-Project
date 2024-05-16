<x-header/>
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>Rooms</h2>
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
                     <p  class="margin_0">Hotel Rooms </p>
                  </div>
               </div>
            </div>
            <div class="row">
               @foreach ($rooms as $r )
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><a href="{{URL::to('singleRoom/'.$r->id)}}"><img src="{{URL::asset('images/rooms/'.$r->picture)}}" alt="#"/> </a></figure>
                     </div>
                     <div class="bed_room">
                        <a href="{{URL::to('singleRoom/'.$r->id)}}"><h3>{{$r->title}}</h3></a>
                        <p>{{$r->type}} </p>
                        <p>{{$r->price}} </p>
                    
       
                     </div>
                  </div>
               </div>
               @endforeach
               {{-- <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/rooms/room2.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <a href="{{URL::to('singleRoom2')}}"><h3>Bed Room</h3></a>
                        <p>Beautiful bedroom with all facilities and breathtaking views </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/rooms/room3.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <a href="{{URL::to('singleRoom3')}}"><h3>Bed Room</h3></a>
                        <p>Bedroom with the beautiful view of newyork city </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/rooms/room4.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <a href="{{URL::to('singleRoom4')}}"><h3>Bed Room</h3></a>
                        <p>Bedroom with the beautifull view of garden </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/rooms/room5.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <a href="{{URL::to('singleRoom5')}}"><h3>Bed Room</h3></a>
                        <p>Bedroom with beautiful views infront of the lake and city of lights </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="images/rooms/room6.jpg" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <a href="{{URL::to('singleRoom6')}}"><h3>Bed Room</h3></a>
                        <p>Beautifull view with the very beautifull wooden style interior </p>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </div>
      <!-- end our_room -->
     
      <!--  footer -->
    <x-footer/>