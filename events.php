<?php
include('../functions/conn.inc.php');
include('../functions/events.inc.php');
include('../functions/viewevents.inc.1.php');
 include('../includes/sessions.inc.php'); 
 
include('../logic/authorize.php');
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Events </title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



<link type="text/css" href="../styles.css" rel="stylesheet">   

</head>
<body>


<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
<button class="navbar-toggler" type="button"
data-toggle="collapse" data-target="#nav-content" 
aria-controls="nav-content" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav-content">   
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.html">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="events.php">Events</a>
</li>
<li class="nav-item">
<a class="nav-link" href="cart.php">Cart</a>
</li>

<li class="nav-item">
<a class="nav-link" href="../Logedin/cms/cms.php">CMS</a>
</li>

</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="btn btn-primary" href="../logic/logout.php" role="button">logout</a>
</li>


</ul>



</nav>

<?PHP

if(isset($_SESSION['login']))
{ include('../includes/session-logout.inc.php');
}else{ include('../includes/session-login.inc.php');
}

?>

<?php $users = new viewEvents();?>


<div class="container-fluid">

  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
       
         <img class="card-img-top img-fluid" src="../images/pushat.jpg" alt="Card image cap">
                    <div class="card-body">
                     
                     <h1> PUSHA T </h1>



                    <p>TICKETS </p>
                    <p>

                  <h2>   PRE-ORDER AVAILABLE </h2>
                    
                    FROM AUGUST 2018



                    COMING SOON !!!!

                    
                   
                    <P>Terrence LeVarr Thornton (born May 13, 1977), 
                    better known by his stage name Pusha T, 
                    is an American rapper and record executive.

                 He initially gained major recognition as half of hip hop duo Clipse, 
                    alongside his brother Gene "No Malice" Thornton, 
                    with whom he founded Re-Up Records. 
                     
                     
                      </p>
                     
                     
                     </div>


            
            
   



          </div>
        </div>

        <?php $users->showEvent();?>
  
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>


<script>

</script>
</html>

