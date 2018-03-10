
<?php
ini_set('display_errors', 1);
include('includes/conn.inc.php');
include('includes/functions.inc.php');


$EventID = ($_GET['EventID']);


$sql = " DELETE FROM Events WHERE EventID = :EventID";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':EventID', $EventID, PDO::PARAM_INT);
$stmt->execute();
// redirect browser
header("Location: ../cms.php");
// make sure no other code executed
exit;