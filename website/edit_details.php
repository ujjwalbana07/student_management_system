
<?php 
	$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sur");
	$query = "update  students set name = '$_POST[name]',parent_name= '$_POST[parent_name]', class = '$_POST[class]',phone = '$_POST[phone]',email= '$_POST[email]',password= '$_POST[password]',remark= '$_POST[remark]',dob= '$_POST[dob]',blood_group= '$_POST[blood_group]',grade= '$_POST[grade]' where  roll_no = $_POST[roll_no]";
	$query_run = mysqli_query($connection,$query);

 ?>
 <script type="text/javascript">
 	alert("Details edited successfully");
 	window.location.href = "student_dashboard.php";
 </script>

