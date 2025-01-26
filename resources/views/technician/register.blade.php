<!DOCTYPE html>
<html>
<head>

	<title>elecTechnician</title>

    <script src="jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel ="stylesheet" href="css/bootstrap.css">

</head>
<body style="background-color: brown;">



    <div class="container-fluid">
		<nav class="navbar navbar-expand-sm navbar-dark bg-warning">
			<a href="#" class="navbar-brand" style="margin-left: 8px;">elecTechnician</a>
			<button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
				<span class="navbar-toggler-icon"></span>
			</button>
	
			<div class="collapse navbar-collapse justify-content-center" id="ccl">
				<ul class="navbar-nav" style="font-size: 25px;">
	
					<li class="nav-item"><a href="http://127.0.0.1:8000/home" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="http://127.0.0.1:8000/service" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="http://127.0.0.1:8000/aboutUs" class="nav-link">About Us</a></li>
					<li class="nav-item"><a href="http://127.0.0.1:8000/contact" class="nav-link">Contect Us</a></li>
					
				</ul>
			</div>
		 </nav>	
	</div>


    <div class="container">

        <div class="card">

            <div class="card-header">

                <h1 class="lead">Register Technician</h1> 
            </div>

            <div class="card-body">

							
							<form method="POST" action="/technician" enctype="multipart/form-data" autocomplete="off">
							{{csrf_field()}}
							
								<div class="container">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="inputFName">First Name</label>
												<input type="text" class="form-control" id="inputFName" name="inputFName" placeholder="Enter First Name" value="{{ old ('inputFName') }}">
												<span class="text-danger">@error('inputFName'){{$message}}@enderror</span>
											</div>

											<div class="form-group col-md-6">
												<label for="inputLName">Last Name</label>
												<input type="text" class="form-control" id="inputLName" name="inputLName" placeholder="Enter Last name" value="{{ old ('inputLName') }}">
												<span class="text-danger">@error('inputLName'){{$message}}@enderror</span>
											</div>

										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="inputEmail">Email</label>
												<input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter Email" value="{{ old ('inputEmail') }}">
												<span class="text-danger">@error('inputEmail'){{$message}}@enderror</span>
											</div>

											<div class="form-group col-md-6">
												<label for="inputUserName">User Name</label>
												<input type="text" class="form-control" id="inputUserName" name="inputUserName" placeholder="Enter User name" value="{{ old ('inputUserName') }}">
												<span class="text-danger">@error('inputUserName'){{$message}}@enderror</span>
											</div>
										</div>

										<div class="form-row">
											<div class="form-group col-md-12">
												<label for="inputAddress">Address</label>
												<input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Enter Address" value="{{ old ('inputAddress') }}" >
												<span class="text-danger">@error('inputAddress'){{$message}}@enderror</span>
											</div>
										</div>

										<div class="form-row">

											<div class="form-group col-md-8">

												<label for="inputLocationCode">Current Location Code  <b>( Use second digits part of code AND Round to one decimal place it)</b></label>
                                				<input type="text" class="form-control" id="inputLocationCode" name="inputLocationCode" placeholder="Plz Use second digits part of code and round to one decimal place it" value="{{ old ('inputLocationCode') }}">
												<span class="text-danger">@error('inputLocationCode'){{$message}}@enderror</span>
											</div>

											<div class="form-group col-md-4" style= "margin-top:33px;">
												<a class = "btn btn-primary"  href="https://www.google.lk/maps" role = "button">Check</a>
											</div>

										</div>

										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="inputPassword">Password</label>
												<input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Enter password" value="{{ old ('inputPassword') }}">
												<span class="text-danger">@error('inputPassword'){{$message}}@enderror</span>
											</div>

											<div class="form-group col-md-6">
												<label for="inputContact">Contact Number</label>
												<input type="text" class="form-control" id="inputContact" name="inputContact" placeholder="Enter Contact Num" value="{{ old ('inputContact') }}">
												<span class="text-danger">@error('inputContact'){{$message}}@enderror</span>
											</div>
										</div>

										<label>Your Photo</label>
								         <div class="form-row">
											
											<div class="form-group col-md-6">
												<div class="custom-file">
													<input type="file" name="Image" class="custom-file-input">
													<label class="custom-file-label" >Choose file</label>	
													<span class="text-danger">@error('Image'){{$message}}@enderror</span>
												</div>

											</div>
										 </div>

										 <div class="form-row">

											<div class="form-group- col-md-6">
												
													<label for="inputTown">Your Town <b>(Nearest Town)</b></label>
													<input type="text" class="form-control" id="inputTown" name="inputTown" placeholder="Enter Nearest Town" >
													<span class="text-danger">@error('inputTown'){{$message}}@enderror</span>
											</div>

										 </div>

										 <div class="form-row" style="margin-top: 10px;">
											
											<div class="form-group col-4">

												<label for="inputDeviceA">Device A</label>
												<select id="inputDeviceA" name="inputDeviceA" class="form-control">
													<option selected>choose</option>
													<option >Mobile</option>
													<option >Laptop</option>	
													<option >TV</option>
													<option >A/C</option>
													<option >Fan</option>
													<option >Fridge</option>
													<option >Oven</option>
													<option >washing Maching</option>
																
												</select>
												<span class="text-danger">@error('inputDeviceA'){{$message}}@enderror</span>
											</div>

											<div class="form-group col-4">

												<label for="inputDeviceB">Device B</label>
												<select id="inputDeviceB" name="inputDeviceB" class="form-control">
													<option selected>choose</option>
													<option >Mobile</option>
													<option >Laptop</option>	
													<option >TV</option>
													<option >A/C</option>
													<option >Fan</option>
													<option >Fridge</option>
													<option >Oven</option>
													<option >washing Maching</option>
																
												</select>
												<span class="text-danger">@error('inputDeviceB'){{$message}}@enderror</span>
											</div>

											<div class="form-group col-4">

												<label for="inputDeviceC">Device C</label>
												<select id="inputDeviceC" name="inputDeviceC" class="form-control">
													<option selected>choose</option>
													<option >Mobile</option>
													<option >Laptop</option>	
													<option >TV</option>
													<option >A/C</option>
													<option >Fan</option>
													<option >Fridge</option>
													<option >Oven</option>
													<option >washing Maching</option>
																
												</select>
												<span class="text-danger">@error('inputDeviceC'){{$message}}@enderror</span>
											</div>


										 
								</div>
							
								<button type="submit" class="btn btn-primary">Register</button>

								<a href="{{url('/technician/login')}}" >I already have an account</a>
							</form>


            </div>





        </div>












    </div>






















    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>
</html> 