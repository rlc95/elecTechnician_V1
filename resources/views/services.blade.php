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
@if(isset($customer))
    <?php
      
      $cusId = $customer->id;

      $CusData = \App\Models\Customer::select('*')->where('id',$cusId)->first();


    ?>

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
            <h1 style="margin-right: 450px; color: aliceblue;">Services</h1>
            <p style="color: tomato; margin-right: 20px; margin-top: 10px;"><b>{{ $CusData->FirstName }} {{ $CusData->LastName }}</b></p>
            <a href="/Cuslogout" type="button" class="btn btn-primary" style="float: right;">Logout</a>

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


                <div class="container" style="margin-top: 30px;">
            <div class="carousel-slide" data-ride="carousel">

                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <img src="{{asset('repair/mobile.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">

                    </div>
                    
                    <div class="carousel-item">

                        <img src="{{asset('repair/laptop.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    </div>

                    <div class="carousel-item">

                        <img src="{{asset('repair/tv.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    </div>

                    <div class="carousel-item">

                        <img src="{{asset('repair/fridge.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    </div>

                    <div class="carousel-item">

                        <img src="{{asset('repair/oven.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    </div>

                    <div class="carousel-item">

                        <img src="{{asset('repair/ac.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    </div>

                    <div class="carousel-item">

                        <img src="{{asset('repair/washing.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    </div>

                    <div class="carousel-item">

                        <img src="{{asset('repair/other.jpg')}}" alt="" style="width: 900px; height: 500px;" class="d-block w-100">
                    </div>

                </div>

            </div>

        </div>



                </div>

                <div class="card-body">


                <br><br>

<div class="container" style="background: white; width: 1050px; height: 1300px;">

    
        <h1 class="text-center " style="font-family: monospace; color: teal;"><b>Device categorizes</b></h1>
        <hr class="display-4">
        <h1 class="lead"><b>Most Popular Devices</b></h1>
        <br>
        <div class="container">

            <div class="row">

                <div class="col-md-3">

                    <i class="fa fa-mobile" style="font-size: 100px; margin-left:20px;" aria-hidden="true"></i>
                    <p>Mobile Repair</p>
                </div>

                <div class="col-md-3" style="margin-top: 10px;">
                    
                    <i class="fa fa-laptop" style="font-size: 90px; margin-left:10px;" aria-hidden="true"></i>
                    <p>Laptop Repair</p>

                </div>

                <div class="col-md-3" style="margin-top: 15px;">
                    
                    <i class="fa fa-television"  style="font-size: 80px;"  aria-hidden="true"></i>
                    <p>TV Repair</p>

                </div>

                <div class="col-md-3" style="margin-top: 25px;">
                    
                    <img src="{{asset('device/ac.png')}}" style="width: 120px; height: 50px;" alt="">
                    <p style="margin-top: 10px;">A/C Repair</p>
                </div>


            </div>

            <br>
            <div class="row">

                <div class="col-md-3">

                    <img src="{{asset('device/fan.png')}}" style="width: 50x; height: 100px;" alt="">
                    <p style="margin-top: 3px;">Fan Repair</p>

                </div>

                <div class="col-md-3">

                    <img src="{{asset('device/fridge.png')}}" style="width: 55x; height: 105px; margin-left:23px;" alt="">
                    <p>fridge Repair</p>
                </div>

                <div class="col-md-3" style="margin-top: 15px;">

                    <img src="{{asset('device/oven.png')}}" style="width: 70x; height: 70px;" alt="">
                    <p style="margin-top: 10px;">Oven Repair</p>
                </div>


                <div class="col-md-3">

                    <img src="{{asset('device/washing.jpg')}}" style="width: 70x; height: 90px; margin-left: 25px;" alt="">
                    <p style="margin-right: 35px; margin-top: 10px;">washing Maching Repair</p>
                </div>



            </div>






        </div>
    
        <hr class="my-4">

        <div class="container" style="background: tomato; width: 500px;">
            <br>
            <h1 class="lead">Meet a best Technician for best services</h1> 
                <br>
            <form method="POST" action="/MeetTechnician/{{ $CusData->id }}" autocomplete="off">
                {{csrf_field()}}

                    @if(Session::get('error'))

                        <div class="alert alert-danger">

                            {{Session::get('error')}}

                        </div>
                    @endif
                    

                <div class="form-row">

                    <div class="form-group col-md-12">
                        
                        <p class="text-center"><labal for="inputDeviceName"><b>Device Name</b></labal></p>
                        
                                        <select id="inputDeviceName" name="inputDeviceName" class="form-control" value="{{ old ('inputDeviceName') }}"> 
                                            <option selected>choose Your Device Name</option>
                                            <option >Mobile</option>
                                            <option >Laptop</option>	
                                            <option >TV</option>
                                            <option >A/C</option>
                                            <option >Fan</option>
                                            <option >Fridge</option>
                                            <option >Oven</option>
                                            <option >washing Maching</option>
                                                        
                                        </select>
                    
                             <span class="text-danger">@error('inputDeviceName'){{$message}}@enderror</span>
                    </div>
                </div>

                <hr class="my-4">
                <p class="text-center">Your Location Details</p>
                
               <div class="form-row">

                    <div class="form-group col-md-6">

                        <label for="inputDistric">Your District</label>
                        <input type="text" class="form-control" id="inputDistrict" name="inputDistrict" placeholder="Enter your Distric" value="{{ old ('inputDistrict') }}">
                        <span class="text-warning">@error('inputDistrict'){{$message}}@enderror</span>
                        
                    </div>

                    <div class="form-group col-md-6">

                        <label for="inputTown">Your Town <b>( Nearest Town)</b></label>
                        <input type="text" class="form-control" id="inputTown" name="inputTown" placeholder="Enter your Town" value="{{ old ('inputTown') }}">
                        <span class="text-warning">@error('inputTown'){{$message}}@enderror</span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-12">

                        <label for="inputAddress">Your Current Address</label>
                        <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Enter your current address" value="{{ old ('inputAddress') }}">
                        <span class="text-warning">@error('inputAddress'){{$message}}@enderror</span>
                    </div>

                </div>

                <div class="form-row">

                    <div class="form-group col-md-8">

                        <label for="inputLocationCode">Current Location Code Current Location Code <b>( Use second digits part of code AND Round to one decimal place it)</b> </label>
                        <input type="text" class="form-control" id="inputLocationCode" name="inputLocationCode" placeholder="Enter Location Code" value="{{ old ('inputLocationCode') }}">
                        <span class="text-warning">@error('inputLocationCode'){{$message}}@enderror</span>

                    </div>

                    <div class = "form-group col-md-4">

                        <a class = "btn btn-primary"  href="https://www.google.lk/maps" role = "button" style="margin-top:104px ;">Check</a>
                    </div>

                </div>

                <hr class="my-4">


                <div class="form-row">

                    <div class="form-group col-md-8" style="margin-left: 200px;">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>


            </form>





        </div>




</div>



                </div>








            </div>

        </div>









        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>



@else


<script>window.location = "/customer/login";</script>


@endif







        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>