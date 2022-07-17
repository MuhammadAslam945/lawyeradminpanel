<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome {{Auth::user()->name}} Profile</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                   
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section class="main-content">
                <div class="row">
         <div class="col-md-12">
             <div class="card">
              <div class="card-header"><div class="card-title">Change Password</div></div>
             
             <div class="card-body">
                 @if(Session::has('pass_msg'))
                 <div class="alert alert-success">{{Session::get('pass_msg')}}</div>
                 @endif
                 @if(Session::has('fail_msg'))
                 <div class="alert alert-danger">{{Session::get('fail_msg')}}</div>
                 @endif
                 <form  class="form" wire:submit.prevent="changePassword">
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Current Password</label>

                     <div class="col-md-12">
                         <input type="password" placeholder="Current Password" class="form-control input-md" name="current_password" wire:model="current_password">
                         @error('current_password') <div class="alert alert-danger">{{$message}}</div>@enderror
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">New Password</label>

                     

                     <div class="col-md-12">
                         <input type="password" placeholder="New Password" class="form-control input-md" name="password" wire:model="password">
                         @error('password') <div class="alert alert-danger">{{$message}}</div>@enderror

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label">Confirm Password</label>
                        

                     <div class="col-md-12">
                         <input type="password" placeholder="Confirm Password" class="form-control input-md" name="password_confirmation" wire:model="password_confirmation">
                         @error('password_confirmation') <div class="alert alert-danger">{{$message}}</div>@enderror

                         </div>
                     </div>
                     <div class="form-group">
                         <label for="" class="col-md-4 control-label"></label>
                      

                     <div class="col-md-12">
                         <button type="submit"  class="btn btn-info pull-right" >Submit</button>
                         </div>
                     </div>
                 </form>

             </div>
            </div>
         </div>
     </div>
                </section>
               
            </div>
        </div>
    </div>
<div>
   
