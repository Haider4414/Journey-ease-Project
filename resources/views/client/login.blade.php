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
               <div class="col-md-6 mx-auto">
                  @if(session()->has('error'))
                     <div class="alert alert-danger">
                        {{session()->get('error')}}
                     </div>
                  @endif
                  @if(session()->has('success'))
                     <div class="alert alert-success">
                        {{session()->get('success')}}
                     </div>
                  @endif
                  <form id="request" class="main_form" method="POST" action="{{URL::to('loginUser')}}">
                     @csrf
                     <div class="row">
                        
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Password" type="password" name="password">                          
                        </div>
                       
                        <div class="col-md-6">
                           <button type="submit" class="send_btn">Login</button>
                          
                        </div>
                        <div class="col-md-6">
                            <a href="{{URL::to('register')}}" style="justify-content: center !important">Don't have an Account?</a>
                          
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