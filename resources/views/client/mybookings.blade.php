<x-header />
      <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="title">
                     <h2>My bookings</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @if(session()->has('success'))
      <div class="alert alert-success">
         {{session()->get('success')}}
      </div>
   @endif
      <!-- about -->
      <div class="container">
        <div class="row ">
           <div class="col-lg-8 col-md-8 text-center mt-4">
              <h2>Booking Details</h2>
              {{-- <table class="table table-responsive">
                 <thead>
                    <tr>
                       <th>full Name</th>
                       <th>Check-in Date</th>
                       <th>Check-out Date</th>
                       <th>Booking Type</th>
                       <th>status</th>
                       <th>Total bill</th>
                       <th>Action</th>
                       <th>Action</th>
                    </tr>
                 </thead>
                 <tbody>
                  @php
                  $total = 0;
              @endphp
                    @foreach ($roomBookings as $b )
                    <tr>
                       <td>{{$b->fullname}}</td>
                       <td>{{$b->startdate}}</td>
                       <td>{{$b->enddate}}</td>
                       <td>{{$b->bookingtype}}</td>
                       <td>{{$b->status}}</td>
                       <td>{{$b->price * $b->days}}</td>
                       <td>
                        @if($b->status=='Confirmed' && strtotime($b->startdate) <= strtotime('today'))
                            <a href="{{URL::to('changebooking/CheckedIn/'.$b->id)}}" class="btn btn-success">Check In</a>
                        @elseif($b->status=='CheckedIn' && strtotime($b->enddate) >= strtotime('today'))
                            <a href="{{URL::to('changebooking/Checkedout/'.$b->id)}}" class="btn btn-success">Check Out</a>
                        @endif
                    </td>
                       <td>
                        @if($b->status!=='CheckedIn')
                        <a href="{{URL::to('deletebooking/'.$b->id)}}" class="btn btn-danger">cancel</a>
                        @endif
                       </td>
                    </tr>
                    @endforeach
                    @foreach ($vehicleBookings as $v )
                    <tr>
                       <td>{{$v->fullname}}</td>
                       <td>{{$v->startdate}}</td>
                       <td>{{$v->enddate}}</td>
                       <td>{{$v->bookingtype}}</td>
                       <td>{{$v->status}}</td>
                       <td>{{$v->price * $v->days}}</td>
                       <td>
                        @if($v->status=='Confirmed' && strtotime($v->startdate) <= strtotime('today'))
                            <a href="{{URL::to('changebooking/CheckedIn/'.$v->id)}}" class="btn btn-success">Check In</a>
                        @elseif($v->status=='CheckedIn' && strtotime($v->enddate) >= strtotime('today'))
                            <a href="{{URL::to('changebooking/Checkedout/'.$v->id)}}" class="btn btn-success">Check Out</a>
                        @endif
                    </td>
                       <td>
                        @if($v->status!=='CheckedIn')
                        <a href="{{URL::to('deletebooking/'.$v->id)}}" class="btn btn-danger">cancel</a>
                        @endif
                       </td>
                    </tr>
                    @php
                    $total += $b->price * $b->days;
                @endphp
                    @endforeach
                 </tbody>
              </table> --}}
              <table class="table table-responsive">
               <thead>
                   <tr>
                       <th>Full Name</th>
                       <th>Check-in Date</th>
                       <th>Check-out Date</th>
                       <th>Booking Type</th>
                       <th>Status</th>
                       <th>Total Bill</th>
                       <th>Action</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                   @php
                   $total = 0; // Initialize the total bill
                   @endphp
                   @foreach ($roomBookings as $b)
                   <tr>
                       <td>{{$b->fullname}}</td>
                       <td>{{$b->startdate}}</td>
                       <td>{{$b->enddate}}</td>
                       <td>{{$b->bookingtype}}</td>
                       <td>{{$b->status}}</td>
                       <td>{{$b->price * $b->days}}</td>
                       <td>
                        @if($b->status=='Confirmed' && strtotime($b->startdate) <= strtotime('today'))
                        <a href="{{URL::to('changebooking/CheckedIn/'.$b->id)}}" class="btn btn-success">Check In</a>
                        @elseif($b->status=='CheckedIn' && strtotime($b->enddate) >= strtotime('today'))
                        <a href="{{URL::to('changebooking/Checkedout/'.$b->id)}}" class="btn btn-success">Check Out</a>
                        @endif
                    </td>
                    <td>
                        @if($b->status!='CheckedIn')
                        <a href="{{URL::to('deletebooking/Available/'.$b->id)}}" class="btn btn-danger">Cancel</a>
                        @endif
                    </td>
                   </tr>
                   @php
                   $total += $b->price * $b->days; // Accumulate the total bill for room bookings
                   @endphp
                   @endforeach

                   @foreach ($vehicleBookings as $v)
                   <tr>
                       <td>{{$v->fullname}}</td>
                       <td>{{$v->startdate}}</td>
                       <td>{{$v->enddate}}</td>
                       <td>{{$v->bookingtype}}</td>
                       <td>{{$v->status}}</td>
                       <td>{{$v->price * $v->days}}</td>
                       <td>
                        @if($v->status=='Confirmed' && strtotime($v->startdate) <= strtotime('today'))
                        <a href="{{URL::to('changebooking/CheckedIn/'.$v->id)}}" class="btn btn-success">Check In</a>
                        @elseif($v->status=='CheckedIn' && strtotime($v->enddate) >= strtotime('today'))
                        <a href="{{URL::to('changebooking/Completed/'.$v->id)}}" class="btn btn-success">Check Out</a>
                        @endif
                    </td>
                    <td>
                        @if($v->status!=='CheckedIn')
                        <a href="{{URL::to('deletebooking/Available/'.$v->id)}}" class="btn btn-danger">Cancel</a>
                        @endif
                    </td>
                   </tr>
                   @php
                   $total += $v->price * $v->days;
                   @endphp
                   @endforeach
               </tbody>
           </table>
         </div>
        <div class="col-lg-4 col-md-4 mt-4">
            <div class="card text-center">
                <div class="card-body">
                    <ul>
                        <li>
                            <strong class="mr-4">Subtotal:</strong>
                            <span class="font-size-lg">${{ $total }}</span>
                        </li>
                        <li>
                            <strong class="mr-5">Total:</strong>
                            <span class="font-size-lg">${{ $total }}</span>
                        </li>
                    </ul>
                    <form action="{{ URL::to('stripe') }}">
                        <input type="text" name="fullname" class="form-control mt-2" placeholder="Enter your fullname" id="" required>
                        <input type="text" name="phone" class="form-control mt-2" placeholder="Enter your phone" id="" required>
                        <input type="text" name="address" class="form-control mt-2" placeholder="Enter your address" id="" required>
                        <input type="hidden" name="bill" class="form-control mt-2" value="{{ $total }}" id="" required>
                        <input type="submit" name="checkout" class="btn btn-primary mt-2 btn-block" value="Proceed to checkout" id="">
                    </form>
                </div>
            </div>
        </div>
        </div>
     </div>
      <!-- end about -->
      <!--  footer -->
    <x-footer/>
