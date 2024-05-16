<x-sellerHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Drivers</h2>
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
                                    <h2>All Drivers</h2>
                                 </div>
                                  <!-- The Modal -->
                                    <div class="modal" id="myModal">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                    
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Add New Driver</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                    
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <form id="request" class="main_form">
                                                    <div class="row">
                                                       <div class="col-md-12">
                                                          <select name="vehical" id="" class="form-control mb-2">
                                                                <option value="">select vehical</option>
                                                                <option value="1">Audi X-123</option>
                                                                <option value="2">Audi Y-123</option>
                                                                <option value="3">Audi Z-123</option>
                                                          </select>
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2"  placeholder="Name" type="text" name="email"> 
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="Phone" type="text" name="phone"> 
                                                       </div>
                                                       <div class="col-md-12">
                                                           <label for="">Porfile Picture</label>
                                                          <input class="form-control mb-2" placeholder="Email" type="file" name="file"> 
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="Email" type="email" name="email"> 
                                                       </div>
                                                       <div class="col-md-12">
                                                          <input class="form-control mb-2" placeholder="Password" type="password" name="password">                          
                                                       </div>
                                                      
                                                       <div class="col-md-12">
                                                          <button type="submit" class="btn btn-success">Add New</button>
                                                       </div>
                                                    </div>
                                                 </form>
                                            </div>
                                    
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            </div>
                                    
                                        </div>
                                        </div>
                                    </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#myModal">
                                    Add New
                                  </button>
                                 <div class="table-responsive-sm">

                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>Firstname</th>
                                             <th>Lastname</th>
                                             <th>Picture</th>
                                             <th>Email</th>
                                             <th>Phone</th>
                                             <th>Country</th>
                                             <th>Vehical</th>
                                             <th>Status</th>
                                             <th>Type</th>
                                             <th>Action</th> 
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>John</td>
                                             <td>Doe</td>
                                             <td><img src="{{URL::asset('admin/images/layout_img/user_img.jpg')}}" width="50px" alt=""></td>
                                             <td>john@example.com</td>
                                             <td>+92-34444444</td>
                                             <td>Pakistan</td>
                                             <td>Audi X-1234</td>

                                             <td>Verified</td>
                                             <td>Driver</td>
                                             <td><a href="#" class="btn btn-danger">Block Now</a></td>
                                            
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                     </div>
                  </div>
                 <x-adminFooter />