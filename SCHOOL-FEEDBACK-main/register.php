<?php
$un =$_POST['uname1'];
$ps =$_POST['upswd1'];
$email=$_POST['email'];
$cps=$_POST['upswd2'];
$con = mysqli_connect("localhost","root","","ashref");
$sql = "INSERT INTO register(un,ps1,ps2,email) values('$un','$ps','$cps','$email')";
$r =mysqli_query($con,$sql);
if($r){
    header("location:login.html");
    exit();
}
else{
    echo "some error in this codes";
}
?>