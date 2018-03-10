<?php

ini_set('display_errors', 1);
include('includes/conn.inc.php');
include('../../includes/sessions.inc.php');
include('../../logic/authorize.php');
$sql= "SELECT * FROM Events";
$stmt = $pdo->prepare($sql);
$stmt->execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CMS</title>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <title>Content Management System</title>
        
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
 integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<link type="text/css" href="styles.css" rel="stylesheet">   

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<link type="text/css" href="..\styles.css" rel="stylesheet"> 
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
      <div style="margin-top:50px">
        <h1>CMS</h1>
      </div>
    
    <div class="row " >
            <div class="col-md-12">
            <p> <a href="insert.php" class="btn btn-success">ADD </a></p>

              <table class="table table-striped">
              		<thead>
                        <tr>
                            <th>Film</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>View</th>
                        </tr>
                    </thead>
					<?php 
					while($row = $stmt->fetchObject()){
						// amend with links to the relevant pages
								echo "<tr>";
								echo "<td>{$row->Artist}</td>";	
								echo "<td><a href=\"edit.php?EventID=$row->EventID\">Edit</a></td>"; echo "<td><a href=\"delete.php?EventID=$row->EventID\">Delete</a></td>"; echo "<td><a href=\"details.php?EventID=$row->EventID\">View</a></td>";
								echo "</tr>";
					}
                    ?>
            </table>
            </div>
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2018 BushCode</p>
      </div>
</footer>
</body>
</html>