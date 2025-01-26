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

     
   <div class="card">

      <div class="card-header">
        

          <div class="row">

          <div class="col">
          <h1>Technicians</h1>

          </div>

          <div class="col">

          <a href="/Adminlogout" type="button" class="btn btn-primary" style="float: right;">Logout</a>
          </div>

          </div>



      </div>

      <div class="card-body">

        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>FirstName</th>
              <th>LastName</th>
              <th>Email</th>
              <th>Address</th>
              <th>ContactNum</th>
            </tr>
          </thead>
          <tbody>
            @foreach($technician as $techData)
            <tr> 
              <td>{{ $techData->id }}</td>
              <td>{{ $techData->FirstName }}</td>
              <td>{{ $techData->LastName }}</td>
              <td>{{ $techData->Email }}</td>
              <td>{{ $techData->Address }}</td>
              <td>{{ $techData->ContactNumber }}</td>

            </tr>
            @endforeach
          </tbody>
        </table>







      </div>
   </div>
  


   











<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>



</body>
</html>