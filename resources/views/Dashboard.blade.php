@include('inc.header');
@if(!isset(Auth::user()->email))
<script type="text/javascript"> window.location="/main/logout"; </script>
@endif
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
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
 @if(session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif
<main class="my-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                	<div class="card-header">Application List</div>
                        	<table class="table table-striped table-hover ">
								  <thead>
								    <tr>
								      <th>S.no.</th>
								      <th>Name</th>
								      <th>Email</th>
								      <th>Contact</th>
								      <th>Address</th>
								      <th>Gender</th>								      
								      <th>Action</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@if(count($applications) > 0)
								  		@foreach($applications->all() as $app)
								  		<tr>
									      <td>{{ $app->id }}</td>
									      <td>{{ $app->name }}</td>
									      <td>{{ $app->email }}</td>
									      <td>{{ $app->contact }}</td>
									      <td>{{ $app->address }}</td>
									      <td>{{ $app->gender }}</td>
									      <td>
									      	<a href='{{ url("/read/{$app->id}") }}' ><span class="label label-primary">Read</span>  |</a>
									      	<a href='{{ url("/update/{$app->id}") }}' ><span class="label label-success">Update</span>  |</a>
									      	<a href='{{ url("/delete/{$app->id}") }}' ><span class="label label-danger">Delete</span>  </a>
									      	
									      </td>
									    </tr>
									    @endforeach
									@endif
								    								    				    
								  </tbody>
								</table>                        	
                    </div>				        
				</div>
            </div>
        </div>
    </div>
</main>
@include('inc.footer');