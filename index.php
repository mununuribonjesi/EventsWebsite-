<?php include('includes/sessions.inc.php'); ?>


<!doctype html>
<html lang="en">
<head>
 
<meta charset="UTF-8">
<title>Home</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
 integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" 
 crossorigin="anonymous">

<link type="text/css" href="styles.css" rel="stylesheet"> 




</head>
<body>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



</script>

<div class ='container'>

<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark"> 
<button  class="navbar-toggler" type="button"
data-toggle="collapse" data-target="#nav-content" 
aria-controls="nav-content" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav-content">   
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="LogedOut/events.php">Events</a>
</li>
<li class="nav-item">
<a class="nav-link" href="LogedOut/cart.php">Cart</a>
</li>
</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<button class="btn btn-primary btn-block" data-toggle="modal" data-target="#popUpWindow">Log In</button>  
</li>
</ul>
</nav>

<?PHP

if(isset($_SESSION['login']))
{ include('includes/session-logout.inc.php');
}

else{ include('includes/session-login.inc.php');
}

?>


<div class="carousel-inner ">
<div class="carousel-item active " >

<div class="row">

<div class="col-sm-12">

<img class="img-fluid topBorder" src="images/dj2.jpg"></div>
</div>
<div class="carousel-caption move">

<form method="POST" action="LogedOut/search.php" >

<h5>  <input type="text" 
placeholder= "  ARTIST OR EVENT" name="search">
</h5>

<h6>
<input type="text"
  placeholder= "Location..." name="address">
</h6>

<h6>
<input type="date"
  placeholder= "dd/mm/yyyy" name="date">
</h6>
<input type="submit" name = "submit" class="btn btn-dark"></input>
</form>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-4 padding-0">
  <img class="img-fluid imgBorder " src="images/wayne.png">
  </div>
<div class="col-sm-4 padding-0">

<img class="mySlides img-fluid imgBorder " src="images/snoop.jpg">
<img class="mySlides img-fluid imgBorder " src="images/nas.jpg">
<img class="mySlides img-fluid imgBorder " src="images/wiz.jpg">

</div>


<div class="col-sm-4 padding-0"><img class="img-fluid imgBorder " src="images/breezy.jpg"></div>
</div>
</div>
<script src="slider.js"> carousel();
</script> 



<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



</body>
</html>



