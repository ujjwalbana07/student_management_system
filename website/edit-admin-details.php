
<?php 
	$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sur");
	$query = "update  admin set name = '$_POST[name]', class_teacher = '$_POST[class_teacher]',email= '$_POST[email]',password= '$_POST[password]',dob= '$_POST[dob]',subject= '$_POST[subject]' where  id = $_POST[id]";
	$query_run = mysqli_query($connection,$query);

 ?>
 <script type="text/javascript">
 	alert("Details edited successfully");
 	window.location.href = "admin_dashboard.php";
 </script>

