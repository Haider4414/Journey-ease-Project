<x-header/>
     <div class="back_re">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                      <h2>Login</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-8 mx-auto">
                  @if(session()->has('error'))
                     <div class="alert alert-danger">
                        {{session()->get('error')}}
                     </div>
                  @endif
                  <form id="request" class="main_form" action="{{URL::to('registerUser')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="row">
                        <div class="col-md-12">
                           <select name="type" class="contactus" id="">
                              <option value="">Select Type</option>
                              <option value="Customer">Customer</option>
                              <option value="Seller">Seller</option>
                           </select>
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Name" type="text" name="fullname"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="Phone" type="text" name="phone"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="CNIC" type="text" name="cnic"> 
                        </div>
                        <div class="col-md-6">
                           <input class="contactus" placeholder="NTN (optional)" type="text" name="ntn"> 
                        </div>
                        <div class="col-md-4">
                           <input class="contactus" placeholder="City" type="text" name="city"> 
                        </div>
                        <div class="col-md-4">
                           <input class="contactus" placeholder="Area" type="text" name="area"> 
                        </div>
                        <div class="col-md-4">
                           <input class="contactus" placeholder="Area Code" type="text" name="areacode"> 
                        </div>
                        <div class="col-md-12">
                            <label for="">Porfile Picture</label>
                           <input class="contactus" placeholder="Email" type="file" name="file"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="email" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Password" type="password" name="password">                          
                        </div>
                       
                        <div class="col-md-12">
                           <button type="submit" class="send_btn">Sign Up</button>
                        </div>
                     </div>
                  </form>
               </div>
              
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
    <x-footer/>