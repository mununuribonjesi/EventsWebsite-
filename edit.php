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
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>Edit <?php echo $row->Artist; ?></title>
          <link href="../css/bootstrap.min.css" rel="stylesheet">
          <link href="../css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container">
          <nav class="navbar navbar-default">
              <div class="container-fluid">
                <ul class="nav navbar-nav">
                  <li><a href="cms.php">CMS Home</a></li>
                </ul>
                <p class="nav navbar-nav navbar-right">
                  		<a class="btn btn-danger navbar-btn" href="http://homepages.shu.ac.uk/~b6016268/banks/" role="button">Log Out</a>
                </p>
              </div>
		</nav>
      <div class="page-header"><h1>Edit //<?php echo $row->Artist; ?></h1> -->
      </div>
    
    <div class="row">
            
            <form name="form1" method="post" action="process/editRecord.php">
            
            <div class="form-group col-md-4">
            		<input name="EventID" type="hidden"value="<?php echo $row->EventID; ?>">
                  
                  
                    <label for="Artist">Artist</label>
                    <input type="text" name="Artist" id="Artist"  class="form-control" value="<?php echo $row->Artist; ?>">
                  
           </div> 
           <div class="form-group col-md-4">      
                  
                    <label for="Venue">Film Image</label>
                    <input type="text" name="Venue" id="Venue"  class="form-control" value="<?php echo $row->Venue; ?>">
                  
          </div> 
          <div class="form-group col-md-4">          
                 
                    <label for="Location">Location</label>
                    <input type="text" name="Location" id="Location" class="form-control" value="<?php echo $row->Location; ?>">
                  
           </div>
          <div class="form-group col-md-4">  
                  
                    <label for="Date">Date</label>
                   <input type="Date" name="Date" id="Date"  class="form-control" value="<?php echo $row->Date; ?>">
                  
          </div>

                    </div> 
          <div class="form-group col-md-4">          
                 
                    <label for="Age">Age</label>
                    <input type="text" name="Age" id="Age" class="form-control" value="<?php echo $row->Age; ?>">
                  
           </div>
          <div class="form-group col-md-4">  
                  
                    <label for="StartTime">StartTime</label>
                   <input type="time" name="StartTime" id="StartTime"  class="form-control" value="<?php echo $row->StartTime; ?>">
                  
          </div>

                  <div class="form-group col-md-4">  
                  
                    <label for="Img">Img</label>
                   <input type="text" name="Description" id="Description"  class="form-control" value="<?php echo $row->Description; ?>">
                  
          </div>

                    <div class="form-group col-md-4">  
                  
                    <label for="EndTime">EndTime</label>
                   <input type="time" name="EndTime" id="EndTime"  class="form-control" value="<?php echo $row->EndTime; ?>">
                  
          </div>

                    <div class="form-group col-md-4">  
                  
                    <label for="Price">price</label>
                   <input type="text" name="Price" id="Price"  class="form-control" value="<?php echo $row->Price; ?>">
                  
          </div>

          

          






           <div class="form-group col-md-12">             
                  <p>
                    <input type="submit" name="button" id="button" value="Update" class="btn btn-default">
                  </p>
         </div>
</form>
            
    </div>
</div>
<footer>
      <div class="container">
        <p class="text-muted">&copy 2016 mustbebuilt.co.uk</p>
      </div>
</footer>
</body>
</html>