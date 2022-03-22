<?php 
		session_start();
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"sur");
				
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>WebDeveloper</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	 
	<!--   <link rel="stylesheet" type="text/css" href="css/style.css"> -->
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
	  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <style type="text/css">
	  	html {
  scroll-behavior: smooth;
}

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}

p{
	font-size: 0.9rem;
    line-height: 1.6;
    font-weight: 400;
    color: #606060;
}

.servicediv h2, .extradiv h2{
	font-size: 0.9rem;
	margin: 20px 0 15px 0;
    font-weight: bold;
    line-height: 1.1;
    word-spacing: 4px;
}

h3{
	text-transform: uppercase;
    color: #fff;
    margin-bottom: 25px;
    font-size: 1.2rem!important;
    font-weight: bold;
    margin-bottom: 20px!important;
    text-shadow: 0 2px 5px rgba(0, 0, 0, 0.6);

}

a{
	text-decoration: none!important;
}

a:hover{
	text-decoration: none!important;
}

li{
	list-style: none;
}



/************** actual css classes code starts *****************/

.header{
	width: 100%;
	height: 100vh;
	background-image:linear-gradient(rgba(0,168,255, 0.3),rgba(0,168,255, 0.3)), url('../images/header-bg.jpg');
	background-repeat: no-repeat;
	background-size: 100% 100%;
	clip-path: polygon(100% 0%, 100% 77%, 50% 100%, 0 75%, 0 0);
	position: relative;
}

.header:before{
	content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0) linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%) ;
    opacity: .4;
}

.navbar:before{
	content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0) linear-gradient(to right, #1e5799 0%, #3ccdbb 0%, #16c9f6 100%) repeat scroll 0 0;
    opacity: .4;
}

.navbar{
	z-index: 5;
}

.nav-item{
	padding: 0 10px;
}

.nav-item a{
	color: white!important;
	font-weight: bold;
}

.logo img{
	height: 50px;
	width: 50px;

}
.header-section{
	width: 100%;
	height: inherit;
	color: white;
	text-align: center;
	position: relative;
}

.header-buttons input{
	border: 1px solid #ffffff;
    border-radius: 100px;
    margin: 0 5px;
    padding: 30px 35px;
    outline: none;
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    background-color: transparent;
}

.header-buttons input:hover {
	background: #fff;
	color:  #50d1c0;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
}
.header-buttons a{
	border: 1px solid #ffffff;
    border-radius: 100px;
    margin: 0 5px;
    padding: 30px 35px;
    outline: none;
    color: #fff;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    background-color: transparent;
}
.header-buttons a:hover {
	background: #fff;
	color:  #50d1c0;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
}
.center-div{
	width: 100%;
	height: auto;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50, -50%);
	-ms-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translate(-50%,-50%);
}

.center-div p{
	font-size: 1.3rem;
	padding: 10px 0px 20px 0;
	color: white;
}
}
.logo img{
	border-radius: 100px;
}


.contactus {
	width: 100%;
	height: 100vh;
	padding: 80px 0;
	position: relative;
}

.contactus:before{
	content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background:  linear-gradient(330deg, #16c9f6 55%,  #fff 0%) ;

}
.email{
	color: white;
	font-size: 1.3rem;
	font-family: 'Comforter Brush', cursive
	}

/*.white{
	background-color: #fff;
	padding: 50px;
	display: inline;
	margin: auto;
}*/

table {
	background-color: #fff;
	margin: auto;
	min-height: 400px;
	width: 500px;
	text-align: center;
	/*display: flex;
	justify-content: center;*/
	border-radius: 30px;	
}

/*INPUT{
	margin: 5px;
	border-radius: 20px;
	border: 1px solid black;
}*/
input {
	z-index: +2;
	color: black;
	border: 1px solid black;
    border-radius: 100px;
    margin: 4px 5px;
    padding: 6px 35px;
    outline: none;
    
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    background-color: transparent;
}
input:hover {
	background: #fff;
	color:  #50d1c0;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
}

#td{
			border: solid 1px black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
		}
		#id{
			border: solid 1px black;
			padding-left: 2px;
			text-align: left;
			width: 200px;
			color: black;
		}



	  </style>
</head>
<body>



<!-- **************** Header Part start ****************** -->

<div class="header" id="topheader">
	<nav class=" navbar navbar-expand-lg fixed-top">
		<div class="container text-uppercase pt-3 logo">
		<img src="images/logo.png">

		<div class="email">EMAIL : <?php echo $_SESSION['email']; ?></div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto text-white">
				<a href="index.html" class="email">logout</a>
			</ul>
		</div>
		</div>
	</nav>
	<section class="header-section">
		<div class="center-div">
			<h1 class="font-weight-bold " id="#welcome">Welcome <?php echo $_SESSION['name']; ?>!</h1>
			<br><br><br>
			<div class="header-buttons">
			
				<form method="post" action="">				
						<input type="submit" name="profile" value="profile">
						<input type="submit" name="edit-profile" value="edit-profile">
						<input type="submit" name="search-student" value="search-student">				
						<input type="submit" name="edit-student" value="edit-student"><br>
						<input type="submit" name="add-new-student" value="add-new-student">
						<input type="submit" name="delete-student" value="delete-student">
				<!-- 		<input type="submit" name="show_teachers" value="show_teachers">	 -->	
						<a href="show_admin.php">show teacher</a>			
				</form>
			</div>
		</div>
	</section>
</div>

<!-- 
************************************ -->


<section class=" contactus">
	<!-- <div class="container headings text-center">
		<h1 class="text-center font-weight-bold ">RESULT</h1>
		<br>
		
	</div> -->

	<div class="container">

		<div class="row ">
			<?php 
					if(isset($_POST['profile']))
					{
						$query = "select * from admin where email = '$_SESSION[email]'";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{	
							?>
							<table>
								<form method="post" action="">
									<tr>
										<td>ID </td>
										<td><input type="text" name="roll_no" value="<?php echo $row['id'] ?>" disabled></td>
									</tr>
									<tr>
									<tr>
										<td>Name </td>
										<td><input type="text" value="<?php echo $row['name'] ?> " disabled></td>
									</tr>
									
									<tr>
										<td>DOB </td>
										<td><input type="text" value="<?php echo $row['dob'] ?> " disabled></td>
									</tr>
									
									

									<tr>
										<td>class teacher </td>
										<td><input type="text" value="<?php echo $row['class_teacher'] ?> " disabled></td>
									</tr>
									
									<tr>
										<td>email</td>
										<td><input type="text" value="<?php echo $row['email'] ?> " disabled></td>
									</tr>
									<tr>
										<td>password</td>
										<td><input type="text" value="<?php echo $row['password'] ?> " disabled></td>
									</tr>
									<tr>
										<td>Subject</td>
										<td><input type="text" value="<?php echo $row['subject'] ?> " disabled></td>
									</tr>

									

								</form>
							</table><?php
						}
					}
			 ?>
			 <?php 
					if(isset($_POST['edit-profile']))
					{
						$query = "select * from admin where email = '$_SESSION[email]'";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{	
							?>
							<table>
								<form method="post" action="edit-admin-details.php">
									<tr>
										<td>ID </td>
										<td><input type="text" name="id" value="<?php echo $row['id'] ?>" ></td>
									</tr>
									<tr>
									<tr>
										<td>Name </td>
										<td><input type="text" name="name" value="<?php echo $row['name'] ?> " ></td>
									</tr>
									
									<tr>
										<td>DOB </td>
										<td><input type="text" name="dob" value="<?php echo $row['dob'] ?> " ></td>
									</tr>
									<tr>
										<td>class teacher </td>
										<td><input type="text" name="class_teacher" value="<?php echo $row['class_teacher'] ?> " ></td>
									</tr>
									<tr>
										<td>email</td>
										<td><input type="text" name="email" value="<?php echo $row['email'] ?> " ></td>
									</tr>
									<tr>
										<td>password</td>
										<td><input type="text" name="password" value="<?php echo $row['password'] ?> " ></td>
									</tr>
									<tr>
										<td>Subject</td>
										<td><input type="text" name="subject" value="<?php echo $row['subject'] ?> " ></td>
									</tr>
									<tr>
										<td>
			
										</td>
										<td><input type="submit" value="save"></td>
									</tr>

									

								</form>
							</table><?php
						}
					}
			 ?>
<!-- 
			 **********************search student********************* -->

			 <?php 
				if(isset($_POST['search-student']))
				{
					?>
					
						<form method="post" action="">

							<table>
								<tr>
									<td>roll no</td>
									<td><input type="text" name="roll_no"></td>
									<td><input type="submit" name="search_by_roll_no_for_search" value="search"></td>
								</tr>
							</table>
							
						</form>
					
					<?php 
				}
					if(isset($_POST["search_by_roll_no_for_search"]))
					{

						$query = "select * from students where roll_no = '$_POST[roll_no]'";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{
							?>
							<table>
								<form method="post" action="">		
								<tr>
										<td>Roll no </td>
										<td><input type="text" name="roll_no" value="<?php echo $row['roll_no'] ?>" disabled></td>
									</tr>
									<tr>
									<tr>
										<td>Name </td>
										<td><input type="text" value="<?php echo $row['name'] ?> " disabled></td>
									</tr>
									<tr>
										<td>Father name </td>
										<td><input type="text" value="<?php echo $row['parent_name'] ?> " disabled></td>
									</tr>
									<tr>
										<td>DOB </td>
										<td><input type="text" value="<?php echo $row['dob'] ?> " disabled></td>
									</tr>
									<tr>
										<td>BLOOD GROUP</td>
										<td><input type="text" value="<?php echo $row['blood_group'] ?> " disabled></td>
									</tr>
									<tr>
										<td>class </td>
										<td><input type="text" value="<?php echo $row['class'] ?> " disabled></td>
									</tr>
									<tr>
										<td>mobile </td>
										<td><input type="text" value="<?php echo $row['phone'] ?> " disabled></td>
									</tr>
									<tr>
										<td>email</td>
										<td><input type="text" value="<?php echo $row['email'] ?> " disabled></td>
									</tr>
									<tr>
										<td>password</td>
										<td><input type="text" value="<?php echo $row['password'] ?> " disabled></td>
									</tr>
									<tr>
										<td>remarks</td>
										<td><input type="text" value="<?php echo $row['remark'] ?> " disabled></td>
									</tr>
									<tr>
										<td>GRADE </td>
										<td><input type="text" value="<?php echo $row['grade'] ?> " disabled></td>
									</tr>
								</form>
							</table>
						<?php
					}	
				}

			 ?>
			 <!-- 
			 ****************edit details********** -->

			  <?php 
				if(isset($_POST['edit-student']))
				{
					?>
					<center>
						<form method="post" action="">

							<table>
								<tr>
									<td>roll no</td>
									<td><input type="text" name="roll_no"></td>
									<td><input type="submit" name="search_by_roll_no_for_edit" value="search"></td>
								</tr>
							</table>
							
						</form>
					</center>
					<?php 
				}
					if(isset($_POST["search_by_roll_no_for_edit"]))
					{

						$query = "select * from students where roll_no = '$_POST[roll_no]'";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{
							?>
							<table>
								<form method="post" action="admin_edit_student.php">
									
									<tr>
										<td>Roll no </td>
										<td><input type="text" name="roll_no" value="<?php echo $row['roll_no'] ?>" ></td>
									</tr>
									<tr>
									<tr>
										<td>Name </td>
										<td><input type="text" name="name" value="<?php echo $row['name'] ?> " ></td>
									</tr>
									<tr>
										<td>parent name </td>
										<td><input type="text" name="parent_name" value="<?php echo $row['parent_name'] ?> " ></td>
									</tr>
									<tr>
										<td>DOB </td>
										<td><input type="text" name="dob" value="<?php echo $row['dob'] ?> " ></td>
									</tr>
									<tr>
										<td>BLOOD GROUP</td>
										<td><input type="text" name="blood_group" value="<?php echo $row['blood_group'] ?> " ></td>
									</tr>
									

									<tr>
										<td>class </td>
										<td><input type="text" name="class" value="<?php echo $row['class'] ?> " ></td>
									</tr>
									<tr>
										<td>mobile </td>
										<td><input type="text" name="phone" value="<?php echo $row['phone'] ?> " ></td>
									</tr>
									<tr>
										<td>email</td>
										<td><input type="text" name="email" value="<?php echo $row['email'] ?> " ></td>
									</tr>
									<tr>
										<td>password</td>
										<td><input type="text" name="password" value="<?php echo $row['password'] ?> " ></td>
									</tr>
									<tr>
										<td>remarks</td>
										<td><input type="text" name="remark"  value="<?php echo $row['remark'] ?> " ></td>
									</tr>
									<tr>
										<td>GRADE </td>
										<td><input type="text" name="grade" value="<?php echo $row['grade'] ?> " ></td>
									</tr>
									<tr>
										<td>
			
										</td>
										<td><input type="submit" value="save"></td>
									</tr>

									


								</form>
							</table>

						<?php

					}
					
				}
			

			 ?>

			<?php 
				if(isset($_POST["add-new-student"]))
				{
					?>
					<table>
						
						<form method="post" action="add_new_student.php">
							<tr>
								<td>Roll no</td>
								<td><input type="text" name="roll_no"></td>
							</tr>
							<tr>
								<td>Name</td>
								<td><input type="text" name="name"></td>
							</tr>
							<tr>
								<td>email</td>
								<td><input type="text" name="email"></td>
							</tr>
							<tr>
								<td>password</td>
								<td><input type="text" name="password"></td>
							</tr>
							<tr>
								<td>parentname</td>
								<td><input type="text" name="parent_name"></td>
							</tr>
							<tr>
								<td>dob</td>
								<td><input type="text" name="dob"></td>
							</tr>
							<tr>
								<td>class</td>
								<td><input type="text" name="class"></td>
							</tr>
							<tr>
								<td>phone</td>
								<td><input type="text" name="phone"></td>
							</tr>
							
							<tr>
								<td>blood_group</td>
								<td><input type="text" name="blood_group"></td>
							</tr>
							<tr>
								<td>remark</td>
								<td><input type="text" name="remark"></td>
							</tr>
							<tr>
								<td>grade</td>
								<td><input type="text" name="grade"></td>
							</tr>
							
							<tr>
								<td></td>
								<td><input type="submit" name="submit" value="submit"></td>
							</tr>

							
						</form>
					</table>

		<?php  


				}

		?>

		 <?php 
		 	if(isset($_POST["delete-student"]))
		 	{
		 		?>
		 		<center><strong>delete student</strong></center>
		 		<table>
		 			<form method="post" action="delete_student.php">

		 				<tr>
		 					<td>roll no </td>
		 					<td><input type="text" name="roll_no"></td>
		 					<td><input type="submit" value="delete student"></td>
		 				</tr>
		 				
		 			</form>
		 		</table>
		 		<?php

		 	} 
		  ?>

		  <?php 
		  		if(isset($_POST['show_teachers']))
		  		{
		  			?>
		  			
		  				
		  				<table >
		  					<tr>
		  						<td id="id"><b>Id</b></td>
		  						<td id="id"><b>name</b></td>
		  						<td id="id"><b>email</b></td>
		  						<td id="id"><b>password</b></td>
								<td id="id"><b>dob</b></td>
								<td id="id"><b>subject</b></td>
								<td id="id"><b>class_teacher</b></td>

		  					</tr>
		  				</table>
		  			
		  			<?php  
		  				$connection = mysqli_connect("localhost","root","");
						$db = mysqli_select_db($connection,"sur");
						$query = "select *  from admin";
						$query_run = mysqli_query($connection,$query);
						while($row = mysqli_fetch_assoc($query_run))
						{
							?>
							
								<table>
									<tr>
										<td id="td"><b><?php echo $row['id'] ?></b></td>
										<td id="td"><b><?php echo $row['name'] ?></b></td>
										<td id="td"><b><?php echo $row['email'] ?></b></td>
										<td id="td"><b><?php echo $row['dob'] ?></b></td>
										<td id="td"><b><?php echo $row['subject'] ?></b></td>
										<td id="td"><b><?php echo $row['class_teacher'] ?></b></td>
										

									</tr>

			  						
								</table>
							<?php 
						}

		  		}

		   ?> 

		    


			
		</div>
	</div>

</section>







</body>
</html>
