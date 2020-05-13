<?php 
$con = mysqli_connect('localhost','root');

if ($con) {
	# code...
	echo "connection";
}else {
	# code...
    echo "not connection";
}

mysqli_select_db($con,'goodluck');

$fullname = $_POST['fullname'];
$mobile =  $_POST['mobile'];
$email  =  $_POST['email'];
$comment = $_POST['comment'];

$query = "insert  into goodluckform(fullname,mobile,email,comment) values('$fullname','$mobile','$email','$comment')";

mysqli_query($con,$query); 



 ?>