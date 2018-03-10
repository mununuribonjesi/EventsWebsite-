<?php
ini_set('display_errors', 1);
include('includes/conn.inc.php');
include('functions.inc.php');

$EventID = safeInt($_POST['EventID']);
$Artist = safeString(['Artist']);
$Venue = safeString($_POST['Venue']);
$Location =safeString ($_POST['Location']);
$Date =safeString ($_POST['Date']);
$Age = safeInt($_POST['Age']);
$StartTime = safeString ($_POST['StartTime']);
$EndTime = safeString ($_POST['EndTime']);
$Description = safeString ($_POST['Description']);
$Price = ($_POST['Price']);








//prepare SQL
//prepare SQL
$sql = "INSERT INTO Events(EventID,Artist, Venue, Location,Date,Age,StartTime, EndTime, Description,Price)
VALUES (:EventID,:Artist, :Venue, :Location,:Date,:Age,:StartTime, :EndTime, :Description,:Price)";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':EventID', $EventID, PDO::PARAM_INT);
$stmt->bindParam(':Artist', $Artist, PDO::PARAM_STR);
$stmt->bindParam(':Venue', $Venue,PDO::PARAM_STR);
$stmt->bindParam(':Location', $Location, PDO::PARAM_STR); 
// use PARAM_STR although a number 
$stmt->bindParam(':Date', $Date, PDO::PARAM_STR); 
$stmt->bindParam(':Age', $Age, PDO::PARAM_INT); 
$stmt->bindParam(':StartTime', $StartTime, PDO::PARAM_INT); 
$stmt->bindParam(':EndTime', $EndTime, PDO::PARAM_STR); 
$stmt->bindParam(':Description', $Description, PDO::PARAM_INT); 
$stmt->bindParam(':Price', $Price, PDO::PARAM_INT); 

$stmt->execute();
// redirect browser
header("Location: ../cms.php");
// make sure no other code executed
exit;




?>
