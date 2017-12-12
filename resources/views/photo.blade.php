<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Photo Hour of Code</title>
</head>
<body>
	        <div class="jumbotron">
	        <center><h1 style="color:red;background-color:black">Galerie photos Hour of Code</h1> </center>
            </div>
   
	<div id="demo" class="carousel slide" data-ride="carousel" style="background-color:white">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
    <li data-target="#demo" data-slide-to="5"></li>
    <li data-target="#demo" data-slide-to="6"></li>
  </ul>

    <!-- foreach de laravel pour afficher le carousel avec toutes les photos -->
    @foreach ($chemin as $element)
	    @if($element->id == 1)
	    	<div class="carousel-item active">
  	 			<center>
  	 				<!-- asset(): Fonction qui gènere une url du dossier public-->
     				<img src="{{ asset('img/'.$element->chemin)}}" alt="{{$element->chemin}}" width="600" height="600">
        		</center>
    		</div>
	    @else
	    	<div class="carousel-item">
  	 			<center>
     				<img src="{{ asset('img/'.$element->chemin)}}" alt="{{$element->chemin}}" width="600" height="600">
        		</center>
    		</div>
	@endif
    
@endforeach
   
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

     


</body>
</html>