<x-header />
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                     <h2>{{$vehicle->title}}</h2>
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
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                    <h1>
                     {{$vehicle->title}}
                    </h1>
                    <p class="text-info">
                        Price / Day : <span class="text-primary"> ${{$vehicle->price}}</span>
                    </p>
                     <p class="margin_0">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>
                     <form action="{{URL::to('booking')}}" method="POST">
                        @csrf
                        <label for="">Booking type</label>
                        <select name="bookingtype"  id="" class="form-control mt-1">
                           <option value="">Select Type</option>
                           <option value="room">Room</option>
                           <option value="vehicle">Vehicle</option>
                        </select><br>
                           <label for="">From</label>
                           <input type="date"  name="startdate" class="form-control">
                           <label for="">To</label>
                           <input type="date" name="enddate" class="form-control">
                          <div class="row">
                           <div class="col-12 col-md-4">
                           <input type="hidden" name="productId" value="{{$vehicle->id}}" class="read_more"><br>
                           <input type="submit" value="Book Now" class="read_more">
                           </div>
                          </div>
                       </form>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="{{URL::asset('uploads/vehicals/'.$vehicle->picture)}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!--  footer -->
      <script>
        // Function to calculate and set the total bill
        function calculateTotalBill() {
            const days = parseFloat(document.getElementsByName('days')[0].value) || 0;
            // Calculate the total bill
            const totalBill = (days * 500).toFixed(2);
            // Set the value of the hidden input field
            document.getElementById('totalBillInput').value = totalBill;
            // Display the total bill
            document.getElementById('totalBill').textContent = 'Total Bill: $' + totalBill;
        }
        // Attach the calculateTotalBill function to input change events
        document.getElementsByName('days')[0].addEventListener('input', calculateTotalBill);
        // Initial calculation when the page loads
        calculateTotalBill();
    </script>
    <x-footer/>
