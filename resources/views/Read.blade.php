@include('inc.header')
@if(!isset(Auth::user()->email))
    <script type="text/javascript"> window.location="/main/logout"; </script>
@endif
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="#">Read Job Application</a>
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
                        <div class="card-header"> Job Application </div>
                            <a href="{{ url('/main') }}" type="button" class="btn btn-default text-right"> Back </a>
                        <div class="card-body">                         


                                <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Full Name : </strong>
                                    <div class="col-md-6">
                                        <label>{{ $applications->name }} </label>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Email : </strong>
                                    <div class="col-md-6">
                                        <label>{{ $applications->email }} </label>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Contact : </strong>
                                    <div class="col-md-6">
                                        <label>{{ $applications->contact }} </label>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Address : </strong>
                                    <div class="col-md-6">
                                        <label>{{ $applications->address }} </label>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Gender : </strong>
                                    <div class="col-md-6">
                                        <label>{{ $applications->gender }} </label>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Education Detail : </strong>
                                    <div class="col-md-6">
                                        <label>Education : {{ $applications->education }} </label> <br>
                                        <label>Board : {{ $applications->board }} </label> <br>
                                        <label>Year : {{ $applications->year }} </label> <br>
                                        <label>CGPA / % : {{ $applications->result }} </label> <br>
                                    </div>
                                </div>

                                  <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Work Experience : </strong>
                                    <div class="col-md-6">
                                        <label>Company : {{ $applications->we_company }} </label> <br>
                                        <label>Designation : {{ $applications->we_designation }} </label> <br>
                                        <label>Date from : {{ $applications->we_date_from }} </label> <br>
                                        <label>To : {{ $applications->we_date_to }} </label> <br>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <strong for="full_name" class="col-md-4 col-form-label text-md-right">Preference : </strong>
                                    <div class="col-md-6">
                                        <label>Preferred Location : {{ $applications->preference_location }} </label> <br>
                                        <label>Expected CTC : {{ $applications->expected_ctc }} </label> <br>
                                        <label>Current CTC : {{ $applications->current_ctc }} </label> <br>
                                        <label>Notice Period : {{ $applications->notice_period }} </label> <br>
                                    </div>
                                </div>
                                         
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</main>

@include('inc.footer')