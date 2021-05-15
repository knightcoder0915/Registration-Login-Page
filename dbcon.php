<?php

$server = "localhost";
$user = "root";
$password ="abc456";
$db = "signup";


$con=mysqli_connect($server,$user,$password,$db,"8111");

if($con){
	?>
	<script>
	/*	alert("Connection Successful"); */
	</script>

	<?php
}else{
	?>
	<script>
		alert("NO Connection");
	</script>

	<?php
}


?>