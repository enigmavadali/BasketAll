<?php
$r_name=$_POST['r_name'];
$r_uname=$_POST['r_uname'];
$r_email=$_POST['r_email'];
$r_pno=$_POST['r_pno'];
$r_addr=$_POST['r_addr'];
$r_dob=$_POST['r_dob'];
$r_pass=$_POST['r_pass'];

$conn = mysqli_connect('localhost', 'root' , '', 'basketall');
if(!$conn)
	die("error!");
$sql = "select * from users where uname='$r_uname' ";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>=1){
	echo "	<!DOCTYPE html>
			<html>
			<body>
			<script> 
			 	window.alert('Username already exists! Please use another username');
			</script>
			</body>
			</html>";

	include("../html/signup.html");
}
else {
	$sql = "insert into users values('$r_name' , '$r_uname' , '$r_email' , '$r_pno' , '$r_addr' , '$r_dob' , '$r_pass' )";
	$result = mysqli_query($conn,$sql);
	echo "<!DOCTYPE html>
			<html>
			<body>
			<script> 
			 	window.alert('Registration Successful');
			</script>
			</body>
			</html>";
			
	header("location:../html/login.html");

	}
?>
