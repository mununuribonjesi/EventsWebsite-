<?php
ini_set('display_errors', 1);
include('includes/conn.inc.php');
$sql= "SELECT * FROM Events WHERE EventID LIKE :EventID";
$sArtist =$_GET['EventID'];
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':EventID', $sArtist, PDO::PARAM_INT); 
$stmt->execute();
$row = $stmt->fetchObject();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>MuniBanks </title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



<link type="text/css" href="styles.css" rel="stylesheet">   

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
<a class="nav-link" href="../index.html">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../events.php">Events</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../cart.php">Cart</a>
</li>

<li class="nav-item">
<a class="nav-link" href="cms.php">CMS</a>
</li>

</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="btn btn-primary" href="http://homepages.shu.ac.uk/~b6016268/banks/logic/logout.php" role="button">logout</a>
</li>


</ul>



</nav>


<div class="row" style="margin-left:0px">
<div class="d-flex justify-content-end">




            <div class="card" style="width: 100rem length: 0rem;">
        <?php echo  '<img class="card-img-top" img src="Artists/'.$row->Description.
            '.jpg" alt="Card image cap">';?>
            

            <h4 class="card-title"> <p>Artist: <?php echo $row->Artist;?>
            </p> <p> Venue:
            <?php echo $row->Venue;?></p> 
            <p> Location:<?php echo $row->Location;?>
            </p> <p> Date:<?php echo $row->Date;?></p> 
            <p> Age: <?php echo $row->Age;?> </p> <p> 
              Start:<?php echo $row->StartTime;?> </p> 
            <p> End:<?php echo $row->EndTime;?></p> </h4></div></div>

<!-- The Modal -->
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



</div>
</body>
</html>

