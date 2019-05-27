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
 
// get database connection
include_once 'database.php';
 
// instantiate user object
include_once 'user.php';
 
$database = new Database();
$db = $database->getConnection();
 
$user = new User($db);
 
// set user property values
$user->username = $_POST['username'];
$user->password = base64_encode($_POST['password']);
$user->created = date('Y-m-d H:i:s');
 
// create the user
if($user->signup()){
    $user_arr=array(
            //"status" => true,
        "message" => "<p> <a href='index.html'> <button> GO TO NEXT PROCESS <button> <a> <p> Successfully Signup! ",
        "id" => $user->id,
        "username" => $user->username
    );
}
else{
    $user_arr=array(
       // "status" => false,
        "message" => " <p> <a href='index.html'> <button> GO TO SIGNUP PAGE  <button> <a> <p> Username already exists!"
    );
}
print_r(json_encode($user_arr));
?>