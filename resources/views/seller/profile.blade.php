<x-sellerHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Profile</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>My Account Deatils</h2>
                                 </div>
                              </div>
                              <div class="full price_table padding_infor_info">
                                 <div class="row">
                                    <!-- user profile section --> 
                                    <!-- profile image -->
                                    <div class="col-lg-12">
                                       <img src="{{URL::asset('uploads/profiles/'.$user->picture)}}" class="mx-auto d-block" width="150px" alt="">
                                       <form action="{{URL::to('updatesellerprofile')}}" method="POST" enctype="multipart/form-data">
                                          @csrf
                                          <label for="">Full Name</label>
                                          <input type="text" name="fullname" placeholder="Full Name" value="{{$user->fullname}}" class="form-control" id="">
                                          <label for="">Email</label>
                                          <input type="email" name="email" placeholder="Email" value="{{$user->email}}" class="form-control" id="">
                                          <label for="">Choose New Picture</label>
                                          <input type="file" name="file" placeholder="Full Name"  class="form-control" id="">
                                          <label for="">New Password</label>
                                          <input type="password" name="password" placeholder="Password" value="{{$user->password}}" class="form-control" id="">
                                          <input type="submit" name="save" value="Save Changes" class="btn btn-primary mt-2" id="">
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2"></div>
                        </div>
                        <!-- end row -->
                     </div>
<x-sellerFooter />