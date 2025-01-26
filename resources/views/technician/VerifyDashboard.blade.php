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

  <script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
  </script>

</head>
<body style="background-color:brown">


<div class="container-fluid">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="#" class="navbar-brand" style="margin-left: 8px;">elecTechnician</a>
            <button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
				<span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="ccl">
                <ul class="navbar-nav" style="font-size: 15px;">
    
                    <li class="nav-item "><a href="http://127.0.0.1:8000/home" class="nav-link">Home</a></li>
                    
                    <li class="nav-item"><a href="http://127.0.0.1:8000/contact" class="nav-link">Contect Us</a></li>
                    
                </ul>
                <p style="color: cornsilk; margin-left: 350px; margin-top: 5px;"><b>Technician</b></p>
            </div>
            
    

            <a href="/logout" type="button" class="btn btn-primary" style="float: right;">Logout</a>

            <ul style="list-style:none; font-size: 30px; float: right;">
                
                <li style="display: inline; "><a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>	

            </ul>
		 </nav>	
	</div>

    <div class="container">

    
    <?php
      
      $VeriTechData = \App\Models\VerifyTechnician::select('*')->where('Technician_ID',session('technicianID'))->first();

      $VtechData = \App\Models\Technician::select('*')->where('id',$VeriTechData->Technician_ID)->first();
      

    ?>
        <div class="card">
       
          <div class="card-header">
            <h1>Dashboard</h1>
            
          </div>
    
          <div class="card-body">
            <div class="row">

              <div class="col-md-2 text-left text-md-center">
                <img class="rounded-circle img-fluid" src="{{ asset('uploads/technician/' . $VtechData->Image) }}" alt="Profile Photo" />
              </div>

              <div class="col">
                <p class="text-right"><b>Technician ID :  {{ $VtechData->id }}</b></p>

                @if($VeriTechData->Verify)
                  <a  type="button" class="btn btn-success">Verified</a>
                @else
                  <a type="button" class="btn btn-warning">Not Verified</a>

                @endif

                <h1 class="text-success"><p class="text-info"><b>{{ $VtechData->FirstName }} {{ $VtechData->LastName }}</b></p></h1>
              </div>

            </div>
            
          
            

         


          </div>

        </div>

        
    </div>







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>
</html>