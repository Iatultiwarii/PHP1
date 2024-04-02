<?php
$con =mysqli_connect('localhost','root');

if($con){
    echo"connection success";

}
else {
    "no connection";
}
mysqli_select_db($con,'userdb');

$username =$_POST['name'];
$email =$_POST['email'];
$PASSWORD =$_POST['pwd'];
$Comment =$_POST['cmnt'];

$query ="insert into response (username,email,PASSWORD,Comment)
values('$username','$email','$PASSWORD','$Comment')";

mysqli_query($con,$query);

header("location:index.php");

?>
