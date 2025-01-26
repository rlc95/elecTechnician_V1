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
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a href="#" class="navbar-brand" style="margin-left: 8px;">elecTechnician</a>
            <button class="navbar-toggler" type="button" data-toggle ="collapse" data-target="#ccl">
				<span class="navbar-toggler-icon"></span>
			</button>

            <div class="collapse navbar-collapse" id="ccl">
                <ul class="navbar-nav" style="font-size: 15px;">
    
                    <li class="nav-item "><a href="http://127.0.0.1:8000/home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="http://127.0.0.1:8000/aboutUs" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="http://127.0.0.1:8000/contact" class="nav-link">Contect Us</a></li>
                    
                </ul>
            </div>
            

		 </nav>	
	</div>



    <div class="container">

        <div class="card">

            <div class="card-header">

                <h1 class="lead">Register Successfully</h1>

            </div>

            <div class="card-body">

                <h1>Login and find a technician</h1>

                <a href="{{url('/customer/login')}}" type="button" class="btn btn-primary">Login</a>

            </div>

        </div>
    </div>






        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>