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

<body style="background-color: brown;">

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
            </div>
            
            <h1 style="margin-right: 450px; color: aliceblue;">Dashboard  </h1>

            <a href="/logout" type="button" class="btn btn-primary" style="float: right;">Logout</a>

            <ul style="list-style:none; font-size: 30px; float: right;">
                
                <li style="display: inline; "><a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>	

            </ul>
		 </nav>	
	</div>

  <div class="container">

    <div class="card">
    
    
      <div class="card-header">
        <div class="row">

          <div class="col">
            <h1>Technicians<sup ><small style="font-size: 50%;">{{session('technicianID')}}</small></sup></h1>
          </div>

        </div>
        
        
        <a type="button" class="btn btn-warning">Not Verified</a>
       
      </div>
  
      <div class="card-body">


    <?php
      
      $TechId = session('technicianID');

      $techData = \App\Models\Technician::select('*')->where('id',$TechId)->first();


    ?>

      
        <p class="text-right"><b>Technician ID :  {{ $techData->id }}</b></p>
      <h1 class="text-success" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Welcome<p class="text-info"><b>{{ $techData->FirstName }} {{ $techData->LastName }}</b></p></h1>

     



      <div class="container">
        <div class="jumbotron">
          <h1 class="display-4">Important</h1>
          <p class="lead">Technician must do the verify process for continue repairing services in elecTechnician application.if account is not verified then technician can not get customer request for repairing service and that account will be deletedafter 24 hours. </p>
          <hr class="my-4">
          <p>Follow steps to verify your account</p>
          <button type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#VerifyTechnician">Verify</button>
        </div>
      </div>


      <div class="modal" tabindex=-1 role="dialog" id="VerifyTechnician">
        <div class="modal-dialog" role="form">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title">Verify</h1>
              <button type="button" class="close" data-dismiss="modal" aria-label="close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form method="POST" action="/VerifyTechnician/{{ $techData->id }}" enctype="multipart/form-data">
							{{csrf_field()}}

              @if(Session::get('error'))

                  <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      {{Session::get('error')}}

                  </div>
                @endif

              <div class="modal-body">

                <div class="container">
			
                  <div class="form-row">
                    
                    <div class="form group col-md-3">
  
                      <label for="inputIndex">Index Number (ID)</label>
                      <input type="text" class="form-control" id="inputIndex" name="inputIndex"  value="{{ old ('inputIndex') }}">
                      <span class="text-danger">@error('inputIndex'){{$message}}@enderror</span>
                    </div>
                  </div>
  
                  <hr class="my-4">
                  <div class="form-row">
                    
                    <div class="form group col-md-12">
  
                        <label for="comment">About Your field</label>
                        <textarea class="form-control" rows="5"  id="comment" name="comment" value="{{ old ('comment') }}"></textarea>
                        <span class="text-danger">@error('comment'){{$message}}@enderror</span>
                    </div>
                  </div>
                  <hr class="my-4">

                  <label>Certificates <p><small>(if you have for your technician field, attach a clear  photo of it)</small></p></label>
								         <div class="form-row">
											
											<div class="form-group col-md-6">
												<div class="custom-file">
													<input type="file" name="Certificate" class="custom-file-input" value="{{ old ('Certificate') }}">
													<label class="custom-file-label" >Choose file</label>	
                          <span class="text-danger">@error('Certificate'){{$message}}@enderror</span>
												</div>

											</div>
										 </div>


                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </form>

          </div>

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
