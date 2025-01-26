<!DOCTYPE html>
<html>
<head>
	<title></title>
    <script src="jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel ="stylesheet" href="css/bootstrap.css">

</head>
<body style="background-color: brown;">

{{session('customerID')}}

    <?php
      
      $cusId = session('customerID');

      $CusData = \App\Models\Customer::select('*')->where('id',$cusId)->first();


    ?>


    <div class="container-fluid">
		<nav class="navbar navbar-expand-sm navbar-dark bg-warning">
			<a href="#" class="navbar-brand" style="margin-left: 8px;">elecTechnician</a>
			<button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
				<span class="navbar-toggler-icon"></span>
			</button>
      <p style="color: tomato; margin-right: 20px; margin-top: 10px;"><b>{{ $CusData->FirstName }} {{ $CusData->LastName }}</b></p>
      <a href="/Cuslogout" type="button" class="btn btn-primary" style="float: right;">Logout</a>

			<div class="collapse navbar-collapse justify-content-center" id="ccl">
				<ul class="navbar-nav" style="font-size: 25px;">
	
					<li class="nav-item"><a href="http://127.0.0.1:8000/home" class="nav-link">Home</a></li>
					
					<li class="nav-item"><a href="http://127.0.0.1:8000/contact" class="nav-link">Contect Us</a></li>
					
				</ul>
			</div>
		</nav>	
	</div>

  <div class="container">

<header class="bg-primary bg-gradient text-white py-5">
  <div class="container">
  


@if(isset($technician))

 
  @foreach($technician as $tech)
    <div class="row">
      <div class="col-md-3 text-left text-md-center mb-3">
        <img class="rounded-circle img-fluid" src="{{ asset('uploads/technician/' . $tech->Image) }}" alt="Profile Photo" />
      </div>
      <div class="col-md-9">
        <h1>{{ $tech->FirstName }} {{ $tech->LastName }} </h1>
        <a href="/SendMail/{{ $tech->id }}" type="button" class="btn btn-success" style="float: right;">Request</a>
        <h5>Freelance Technician</h5>
        <h2>Email   | {{ $tech->Email }}</h2>
        <h3>Address | {{ $tech->Address }} </h3>
        <h4>Contact Number | {{ $tech->ContactNumber }}</h4>
          <p class="border-top pt-3"><P>About<br></P>{{ $tech->About_Field }}</p>
     
      </div>       
    </div> 
    @endforeach  
  </div>
</header>

  </div>
@endif

  




@if(!isset($technician))

<div class="container">

   


    <div class="card">

      <div class="card-header">

      </div>

      <div class="card-body">
          <h class="text-danger">Now not available your service Try Again Later!</h>
          <hr class="display-4">
          
          <button onclick="goBack()" style="color: burlywood;">Go Back</button>

          <script>
          function goBack() {
            window.history.back();
          }
          </script> 



      </div>

    </div>

</div>


@endif


      
           
            




  


   











<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>
</html>