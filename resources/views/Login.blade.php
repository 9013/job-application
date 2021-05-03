<!DOCTYPE html>
<html>  
<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
<body>

    <div class="container my-4">    
    <hr>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title text-center">Sign In</div>
                        
                    </div>  
                    @if(isset(Auth::user()->email))
                        <script type="text/javascript"> window.location="/main/successlogin"; </script>
                    @endif

                    @if( $message = Session::get('error'))
                            <div id="login-alert" class="alert alert-danger alert-block col-sm-12">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                <strong>{{ $message }}</strong>
                            </div>
                    @endif

                    <div style="padding-top:30px" class="panel-body" >                        
                        @if(count($errors) > 0)
                            <div id="login-alert" class="alert alert-danger col-sm-12">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{ $error }} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            
                        <form method="POST" action="{{ url('main/checklogin') }}" >
                            {{ csrf_field() }}
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="Email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                            <div class="input-group">                                      
                                <div style="margin-top:10px" class="form-group">
                                    <div class="col-sm-12 controls">                                      
                                      <input type="submit" id="btn-login" href="#" class="btn btn-success" Value="Login">
                                    </div>
                                </div>   
                            </form>     

                        </div>                     
                    </div>  
        </div>
    </div>
    
  
</body>
  
</html>