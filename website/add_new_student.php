<?php 
	$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sur");

		// $dob=date(Y-m-d, strtotime($_POST['dob']));
		$query = "insert into students values($_POST[roll_no],'$_POST[name]','$_POST[email]','$_POST[password]','$_POST[parent_name]', '$_POST[dob]',$_POST[class],$_POST[phone],'$_POST[blood_group]','$_POST[remark]','$_POST[grade]')";

echo $query;


 ?>
 <script type="text/javascript">
 	alert("Details edited successfully");
 	window.location.href = "admin_dashboard.php";
 </script>


 