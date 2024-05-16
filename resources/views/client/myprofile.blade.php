<x-header/>
               <!-- dashboard inner -->
                          
               <div class="back_re">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
                  
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head ">
                                 <div class="heading1 margin_0 text-center">
                                   <br><br> <h2 >My Account Deatils</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row ">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <img src="{{URL::asset('uploads/profiles/'.$user->picture)}}" class="d-block mx-auto mb-4" width="150px" height="auto" alt="">
                                    </div>
                                    <div class="col-lg-8 mx-auto">
                                       <form action="{{URL::to('updatecustomerprofile')}}" method="POST" enctype="multipart/form-data">
                                           @csrf
                                   
                                           <div class="form-group row">
                                               <label for="fullname" class="col-sm-3 col-form-label">Full Name</label>
                                               <div class="col-sm-9">
                                                   <input type="text" name="fullname" id="fullname" placeholder="Full Name" value="{{$user->fullname}}" class="form-control">
                                               </div>
                                           </div>
                                   
                                           <div class="form-group row">
                                               <label for="email" class="col-sm-3 col-form-label">Email</label>
                                               <div class="col-sm-9">
                                                   <input type="email" name="email" id="email" placeholder="Email" value="{{$user->email}}" class="form-control">
                                               </div>
                                           </div>
                                   
                                           <div class="form-group row">
                                               <label for="file" class="col-sm-3 col-form-label">Choose New Picture</label>
                                               <div class="col-sm-9">
                                                   <input type="file" name="file" id="file" class="form-control">
                                               </div>
                                           </div>
                                   
                                           <div class="form-group row">
                                               <label for="password" class="col-sm-3 col-form-label">New Password</label>
                                               <div class="col-sm-9">
                                                   <input type="password" name="password" id="password" placeholder="Password" value="{{$user->password}}" class="form-control">
                                               </div>
                                           </div>
                                   
                                           <div class="form-group text-center">
                                               <input type="submit" name="save" value="Save Changes" class="btn btn-primary mt-2">
                                           </div>
                                       </form>
                                   </div>
                                   
                                   
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end row -->
                     </div>
<x-footer/>