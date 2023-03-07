<?php
session_start();
include("../includes/utils.php");
include("../includes/User.php");
include("../includes/Trails.php");
$conn = connect_to_db("finalProjectDelaneyDayoan");
$user = User::getUserById($conn, $_SESSION["username"]);

$trail = Trail::getTrailsById($conn, $_POST["trailId"]);

$done = explode(",", $user->trailsDone);
if (!in_array($_POST["trailId"], $done)){
    array_push($done, $_POST["trailId"]);
}
$donestr = implode(",", $done);

$update = "UPDATE users 
SET trailsDone = :trailsDone
WHERE username=:username";
    $stmt = $conn->prepare($update);
    $stmt->bindParam(':username', $user->username);
    $stmt->bindParam(':trailsDone', $donestr);   
    if($stmt->execute()){
       // header("Location: account.php");
      }
      else{
        print_r($stmt->errorInfo()); 
      } 

header("Location: " . strtolower($trail->trailCity) . ".php");