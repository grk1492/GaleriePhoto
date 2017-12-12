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

   
	<div id="demo" class="carousel slide" data-ride="carousel">

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
  
  <!-- The slideshow -->
<!--   <div class="carousel-inner">
    <div class="carousel-item active">
      <center>
      <img src="{{ asset('img/'.$chemin[0]->chemin)}}" alt="Photo HOfC AYS" width="600" height="600">
          </center>
    </div>
     <div class="carousel-item">
      <center>
      <img src="{{ asset('img/'.$chemin[1]->chemin)}}" alt="Photo HOfC DA" width="600" height="600">
  		</center>
    </div> -->
    <!--<div class="carousel-item">
      <center>
      <img src="{{ asset('img/hakd.jpg')}}" alt="Photo H Of C HAKD" width="600" height="600">
        </center>
    </div>
  </div>
  <div class="carousel-item">
  	  <center>
      <img src="{{ asset('img/sa.jpeg')}}" alt="Photo H Of C SA" width="600" height="600"/>
        </center>
    </div>
  </div>
  <div class="carousel-item">
  	  <center>
      <img src="{{ asset('img/kl.jpeg')}}" alt="Photo H Of C KL" width="600" height="600">
         </center>
    </div>
  </div>
  <div class="carousel-item">
  	  <center>
      <img src="{{ asset('img/mmkj.jpeg')}}" alt="Photo H Of C MMKJ" width="600" height="600">
         </center>
    </div>
  </div>
  <div class="carousel-item">
  	  <center>
      <img src="{{ asset('img/pizza.jpeg')}}" alt="Photo H Of C Pizza" width="600" height="600">
        </center>
    </div> -->
    @foreach ($chemin as $element)
	    @if($element->id == 1)
	    	<div class="carousel-item active">
  	 			<center>
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