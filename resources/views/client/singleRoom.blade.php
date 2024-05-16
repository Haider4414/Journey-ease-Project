<x-header />
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2> {{$room->title}}</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about -->

      <div class="about">
         <div class="container-fluid">
            @if(session()->has('success'))
            <div class="alert alert-success">
               {{session()->get('success')}}
            </div>
         @endif
           @if(session()->has('error'))
            <div class="alert alert-danger">
               {{session()->get('error')}}
            </div>
         @endif
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                    <h1>
                       {{$room->title}}
                    </h1>
                    <p class="text-info">
                        Price / Day : <span class="text-primary"> ${{$room->price}}</span>
                    </p>
                    <p class="text-black">
                        Extra Services : <span class="text-black"> {{$room->extraservices}}</span>
                    </p>
                     <p class="margin_0">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>

                    <form action="{{ URL::to('booking') }}" method="POST">
                        @csrf
                        <label for="bookingtype">Booking type</label>
                        <select name="bookingtype" id="bookingtype" class="form-control mt-1">
                            <option value="">Select Type</option>
                            <option value="room">Room</option>
                            <option value="vehicle">Vehicle</option>
                        </select><br>

                        <label for="startdate">From</label>
                        <input type="date" name="startdate" id="startdate" class="form-control">

                        <label for="enddate">To</label>
                        <input type="date" name="enddate" id="enddate" class="form-control">
                        <input type="hidden" name="productId" value="{{$room->id}}" class="read_more">
                        {{-- <label for="days">Days</label>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <input type="number" name="days" id="days" min="1" class="form-control mb-3">
                            </div>
                            <input type="hidden" name="productId" value="{{$room->id}}" class="read_more">
                        </div> --}}
                        <div class="col-12 col-md-4 mt-3">
                                <input type="submit" value="Book Now" class="read_more">
                        </div>
                    </form>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="{{URL::asset('uploads/rooms/'.$room->picture)}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->


      <!--  footer -->
    <x-footer/>
