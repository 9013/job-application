@include('inc.header')
@if(!isset(Auth::user()->email))
    <script type="text/javascript"> window.location="/main/logout"; </script>
@endif
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Update Job Application</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @if(isset(Auth::user()->email))
                    <li class="nav-item">
                        <a class="nav-link">Wecome {{ Auth::user()->name }}</a>
                    </li>           
                    <li class="nav-item"><a class="nav-link"> | </a> </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="{{ url('/main/logout') }}"> Logout </a>
                    </li>
                @endif            
            </ul>
        </div>
    </div>
</nav>
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register</div>
                        <div class="card-body">
                            @if(session('info'))
                                <div class="alert alert-success">
                                    {{ session('info') }}
                                </div>
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
                            <form name="my-form" action="{{ url('/edit',array($applications->id)) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <h3 for="" class="col-md-12 col-form-label text-md-center"> Basic Details </h3>
                                </div>
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name</label>
                                    <div class="col-md-6">
                                        <input type="text" id="full_name" class="form-control" name="name" value="<?= $applications->name ?>">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input type="email" id="email_address" class="form-control" name="email" value="<?= $applications->email ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                                    <div class="col-md-6">
                                        <textarea type="textarea" id="address" class="form-control" name="address"><?php echo $applications->address?></textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="contact" class="col-md-4 col-form-label text-md-right"> Contact no. </label>
                                    <div class="col-md-6">
                                        <input type="number" id="contact" class="form-control" maxlength name="contact" value="<?= $applications->contact ?>" >
                                    </div>
                                </div>                                                            

                                <div class="form-group row">
                                    <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                                    <div class="col-md-6">
                                        <!-- <input type="text" id="gender" class="form-control" name="gender"> -->
                                        <div class="radio">
                                          <label>
                                            <input type="radio" name="gender" id="optionsRadios1" value="Male" <?php if($applications->gender == "Male"){ echo "checked"; } ?> >
                                            Male
                                          </label>
                                          <label>
                                            <input type="radio" name="gender" id="optionsRadios2" value="Female" <?php if($applications->gender == "Female"){ echo "checked"; } ?> >
                                            Female
                                          </label>
                                        </div>                                        
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <h3 for="" class="col-md-12 col-form-label text-md-center"> Education Details </h3>
                                </div>
                                <div class="form-group row">
                                    <label for="contact" class="col-md-4 col-form-label text-md-right"> Education </label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="select" name="education"> 
                                          <option value="SSC" <?php if($applications->education ==""){ echo "selected"; } ?>>-- Selecte Education Detail</option>
                                          <option value="SSC" <?php if($applications->education =="SSC"){ echo "selected"; } ?>>SSC</option>
                                          <option value="HSC" <?php if($applications->education =="HSC"){ echo "selected"; } ?>>HSC</option>
                                          <option value="Graduation" <?php if($applications->education =="Graduation"){ echo "selected"; } ?>>Graduation</option>
                                          <option value="Master Degree" <?php if($applications->education =="Master Degree"){ echo "selected"; } ?>>Master Degree</option>                                                  
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="board-university" class="col-md-4 col-form-label text-md-right">Board/University</label>
                                    <div class="col-md-6">
                                        <input type="text" id="board" class="form-control" name="board" value="<?= $applications->board ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>
                                    <div class="col-md-6">
                                        <input type="text" id="year" class="form-control" name="year" value="<?= $applications->year ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="result" class="col-md-4 col-form-label text-md-right">CGPA/Percentage</label>
                                    <div class="col-md-6">
                                        <input type="text" id="result" class="form-control" name="result" value="<?= $applications->result ?>">
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group row">
                                    <h3 for="" class="col-md-12 col-form-label text-md-center"> Work Experience </h3>
                                </div>

                                <div class="form-group row">
                                    <label for="company" class="col-md-4 col-form-label text-md-right"> Company </label>
                                    <div class="col-md-6">
                                         <input type="text" id="company" class="form-control" name="we_company" value="<?= $applications->we_company ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="designation" class="col-md-4 col-form-label text-md-right"> Designation </label>
                                    <div class="col-md-6">
                                         <input type="text" id="designation" class="form-control" name="we_designation" value="<?= $applications->we_designation ?>">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="designation" class="col-md-4 col-form-label text-md-right"> Date From / To  </label>
                                    <div class="col-md-6">
                                         <div class="row">
                                             <input type="date" id="date_from" class="col-md-6 form-control" name="we_date_from" value="<?= $applications->we_date_from ?>"> 
                                             <input type="date" id="date_to" class="col-md-6 form-control" name="we_date_to" value="<?= $applications->we_date_to ?>">
                                         </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                   <h3 for="" class="col-md-12 col-form-label text-md-center"> Preference </h3>
                                </div>
                                
                               
                                <div class="form-group row">
                                    <label for="preference_location" class="col-md-4 col-form-label text-md-right">Preferred Location</label>
                                    <div class="col-md-6">
                                        <input type="text" id="preference_location" class="form-control" name="preference_location" value="<?= $applications->preference_location ?>">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="expected_ctc" class="col-md-4 col-form-label text-md-right">Expected CTC</label>
                                    <div class="col-md-6">
                                        <input type="text" id="expected_ctc" class="form-control" name="expected_ctc" value="<?= $applications->expected_ctc ?>"> 
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="current_ctc" class="col-md-4 col-form-label text-md-right">Current CTC</label>
                                    <div class="col-md-6">
                                        <input type="text" id="current_ctc" class="form-control" name="current_ctc" value="<?= $applications->current_ctc ?>">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="notice_period" class="col-md-4 col-form-label text-md-right">Notice Period</label>
                                    <div class="col-md-6">
                                        <input type="text" id="notice_period" class="form-control" name="notice_period" value="<?= $applications->notice_period ?>">
                                    </div>
                                </div>

                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    Update
                                    </button>
                                    <a href="{{ url('/main') }}" type="button" class="btn btn-default text-right"> Back </a>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>
<script type="text/javascript">
function validform() {

        var a = document.forms["my-form"]["full-name"].value;
        var b = document.forms["my-form"]["email-address"].value;
        var c = document.forms["my-form"]["username"].value;
        var d = document.forms["my-form"]["permanent-address"].value;
        var e = document.forms["my-form"]["nid-number"].value;

        if (a==null || a=="")
        {
            alert("Please Enter Your Full Name");
            return false;
        }else if (b==null || b=="")
        {
            alert("Please Enter Your Email Address");
            return false;
        }else if (c==null || c=="")
        {
            alert("Please Enter Your Username");
            return false;
        }else if (d==null || d=="")
        {
            alert("Please Enter Your Permanent Address");
            return false;
        }else if (e==null || e=="")
        {
            alert("Please Enter Your NID Number");
            return false;
        }

    }
    </script>

@include('inc.footer')