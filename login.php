<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<style >
     body{
        background-image: url("1.jpg");
    }
</style>
<style>
    p
    {
        padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
   border: 2px solid #f44336;;
  border-radius: 15px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
  float:center;
  right:400;

</style>
</html>





<?php
// include database and object files
include_once 'database.php';
include_once 'user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->username = isset($_GET['username']) ? $_GET['username'] : die();
$user->password = base64_encode(isset($_GET['password']) ? $_GET['password'] : die());
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        //"status" => true,
        "message" => "  <p> <a href=ss.html> <button> GO TO NEXT PROCESS  <button> <a> <p> Successfully Login!  ",
        "id" => $row['id'],
        "username" => $row['username']
    );
}
else{
    $user_arr=array(
        //"status" => false,
       "message" => "<p> <a href=index.html><button> TRY AGAIN <button> <a> <p> Password is Wrong",

    );
}
// make it json format
print_r(json_encode($user_arr));
?>