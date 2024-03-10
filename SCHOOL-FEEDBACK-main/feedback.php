<?php
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$rn = $_POST['regno'];
$d =$_POST['department'];
$con=mysqli_connect("localhost","root","","afb");
$sql="INSERT INTO Ausers(n,e,f,r,d) VALUES('$name','$email','$feedback','$rn','$d')";
$r=mysqli_query($con,$sql);
if($r){
    echo "your feedbck is added";
    exit();
}
else{
    echo "some error in this php codes";
}
?>