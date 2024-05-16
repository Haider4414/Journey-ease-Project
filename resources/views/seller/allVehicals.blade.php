<x-sellerHeader />
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Vehials</h2>
                           </div>
                        </div>
                     </div>
                     @if(session('success'))
                     <div class="alert alert-success">
                        {{session('success')}}
                     </div>
                     @endif
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
          
                           
                              </div>
                              <div class="full gallery_section_inner padding_infor_info">
                                
                                 <div class="row">
                                    @foreach ($vehicle as $v )
                                    <div class="col-sm-6 col-md-6 margin_bottom_30">
                                     
                                       <div class="column">
                                          <a data-fancybox="gallery" href=""><img class="img-responsive" src="{{URL::asset('uploads/vehicals/'.$v->picture)}}" alt="#" /></a>
                                       </div>
                                       <div class="heading_section">
                                          <div class="row">
                                            <div class="col-4">
                                                <h4>{{$v->title}}</h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>Driver<br></h4>
                                            </div>
                                            <div class="col-4">
                                                <h4>{{$v->price}}.Rs/Day</h4>
                                            </div>
                                          </div>
                  
                                        <button type="button" class="btn btn-info  ml-4 mr-3 mb-4 col-sm-5 " data-toggle="modal" data-target="#updatevehicle">
                                       update 
                                        </button>
                                        <div class="modal" id="updatevehicle">
                                          <div class="modal-dialog">
                                          <div class="modal-content">
                                       
                                             <!-- Modal Header -->
                                             <div class="modal-header">
                                                <h4 class="modal-title text-dark">update vehicles</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                             </div>
                                       
                                             <!-- Modal body -->
                                             <div class="modal-body">
                                                <form action="{{URL::to('updateVehicle')}}" method="POST" enctype="multipart/form-data">
                                                  @csrf
                                                   <label for="">
                                                      Title
                                                   </label>
                                                   <input type="text" name="title" class="form-control" value="{{$v->title}}" placeholder="enter the title"  id="">
                                                   <label for="">
                                                      Type
                                                   </label>
                                                   <input type="text" name="type" class="form-control" value="{{$v->type}}" placeholder="enter the type"  id="">
                                          
                                                   <label for="">
                                                      Price
                                                   </label>
                                                   <input type="number" name="price" class="form-control" value="{{$v->price}}" placeholder="enter the price" id="">
                                                   <label for="">
                                                      new  Picture 
                                                   </label>
                                                   <input type="file" name="file" class="form-control"  id="">
                                                   <input type="hidden" name="id" value="{{$v->id}}" class="form-control"  id="">
                                                   <input type="submit" name="update" value="Save Changes" class="mt-2 btn btn-secondary" id="">
                                                </form>
                                             </div>      
                                          </div>
                                          </div>
                                       </div>

                                        <a type="button" class="btn btn-danger   mb-4 col-sm-5"  href="{{URL::to('deletevehicle/'.$v->id)}}">
                                          delete
                                        </a>  
                                     </div> 
                                     
                                    </div>
                                    
                                    @endforeach
                                 </div>
                               
                                
                              </div>
                           </div>
                        </div>
                     </div>
                     <x-sellerFooter />