<!DOCTYPE html>
<html lang="en">
<head>
	<title>elecTechnician</title>
	<script src="jquery-3.5.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel ="stylesheet" href="css/bootstrap.css">
    
</head>
<body style="background-color: #B19393;">
 
	<div class="container-fluid">
		<nav class="navbar navbar-expand-sm navbar-dark bg-warning">
			<a href="#" class="navbar-brand" style="margin-left: 8px;">elecTechnician</a>
			<button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
				<span class="navbar-toggler-icon"></span>
			</button>
	
			<div class="collapse navbar-collapse justify-content-center" id="ccl">
				<ul class="navbar-nav" style="font-size: 25px;">
	
					<li class="nav-item"><a href="http://127.0.0.1:8000/home" class="nav-link">Home</a></li>
					
					<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="{{url('customer/login')}}">sign in</a>
         					<div class="dropdown-divider"></div>
        				</div>
      				</li>
					
					
					<li class="nav-item"><a href="http://127.0.0.1:8000/contact" class="nav-link">Contect Us</a></li>
				
					
					<li class="nav-item dropdown" style="margin-left: 240px;">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admin</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          					<a class="dropdown-item" href="{{url('Admin/login')}}">sign in</a>
         					<div class="dropdown-divider"></div>
        				</div>
      				</li>

				</ul>
			</div>
		 </nav>	
	</div>
     
	
	<div class="container">


		<div class="card">

			<div class="card-header">

				<div class="container mt-5">
						<div class="row">

            				<div class="col-8">

                				<h1 style="font-size: 60px; color: blueviolet; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;"> <b>WELCOME <br>TO<br>elecTechnician</b></h1>
            				</div>

            				<div class="col-4">

								<div class="container">

										<h1 class="lead" style="color: rgb(34, 95, 95); margin-left:180px ;"><b>Follow Us</b></h1>
										<ul style="list-style:none; font-size: 40px; float: right;">
                
											<li style="display: inline; "><a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
											<li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
											<li style="display: inline;"><a href="#" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a></li>	
      
                						</ul>


								</div>
            
            				</div>


        				</div>

    			</div>

			</div>



			<div class="card-body">

				<br><br>
				<div class="container">
					<div class="jumbotron">
						<h1 class="display-4">Hello</h1>
						<p class="lead">Can be found and contacted the better electrical or electronic technician for get repair service. This application helps for both component user and technician by providing better service. Component users can request the repair service from technicians while technicians can go freelancing. Technicians can register by entering own correct details and performance in relate categorize.</p>
						<hr class="my-4">
						<p>More information.....</p>
						<a class="btn btn-primary btn-md" href="#" role="button" data-toggle="modal" data-target="#info">Learn more</a>
					</div>
				</div>
			

				<div class="modal" tabindex=-1 role="dialog" id="info">
					<div class="modal-dialog modal-dialog-scrollable " role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h1 class="modal-title">elecTechnician</h1>
						  <button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
			
						  <div class="modal-body">
			
							<p class="text-justify">

								when electronic or electrical components are not working or break down, component user has to go and find better technician in him/her area or other area. That’s time wasting in busy life style. In this case cannot be get reliable and responsible service. There are electrical or electronic components that cannot be carried easily such as fridge, television, washing machine. For repair these components, user has to get transport service by spending extra cost to carry break down component unto repair shop. In other hand when repairman is busy time, sometime owner has to come back without component and go in another day to get made component. That’s a risk because component owner doesn’t know that are new parts used to repair and can be changed own electronic or electrical component with another person’s component. Not only that specially in this case when break down the laptop or smart mobile phone.essential and personal data can be lost and shared among each that’s a more risk about component owner’s protection of data.
								Purpose of this project is to provide better electronic or electrical components repairing system by solving that problems as a solution. This application helps for user can get repair of breached component at home by connecting a capable technician. Then technician come and fix the problem of electrical or electronic component with necessary new component parts to repair immediately
							</p>
						  </div>
			
						  <div class="modal-footer">
							<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						  </div>
			
					  </div>
			
					</div>
			
				</div>



				<div class="container mt-5">
					<h1 class="text-center" style="font-size: 45px; color: #ff4d94; font-family: 'Courier New', Courier, monospace;"> <b>JOIN WITH US</b></h1>
				</div>
			
				<hr class="my-4">
			
				<div class="container mt-5">
					
					<div class="row">
						
						<div class="col-6">
							<h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color: coral;">Technician</h1>
							<img src="images/technician.jpg"  class="d-block image fluid" style="width: 450px; height: 400px;" alt="">
			
							<h1 class="lead">Join With</h1>
							
							<a class = "btn btn-warning"  href="{{url('/technician/register')}}" role = "button">Register</a>
							<a class = "btn btn-primary"  href="{{url('/technician/login')}}" role = "button">Login</a>
							
						</div>
					
						<div class="col-6" >
							<h1 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color: coral;">Customer</h1>
							<img src="images/Customer.jpg"  class="d-block image fluid" style="width: 450px; height: 400px;" alt="">
			
							<h1 class="lead">Join With</h1>
							
							
							<a class = "btn btn-warning"  href="{{url('/customer/register')}}" role = "button">Register</a>
							<a class = "btn btn-primary"  href="{{url('/customer/login')}}" role = "button">Login</a>
			
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