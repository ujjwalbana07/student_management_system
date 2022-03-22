<?php
			 session_start(); 
			if(isset($_POST['submit']))
			{

				$connection = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($connection,"sur");
				$query = "select * from admin where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while($row = mysqli_fetch_assoc($query_run)){
					if($row['email'] == $_POST['email'])
					{
						if($row['password'] == $_POST['password'])
						{
							$_SESSION['email'] = $row['email'];
							$_SESSION['name'] = $row['name'];
							header("Location: admin_dashboard.php");
						}
						else
						{
							echo "Wrong Password";
						}
					}
					else
					{
						echo "Wrong email ID";
					}
				}
			}	
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
	background-image:linear-gradient(rgba(0,168,255, 0.3),rgba(0,168,255, 0.3));
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
    background: rgba(0, 0, 0, 0) linear-gradient(to right, #16c9f6 0%, #16c9f6 0%, #16c9f6 100%) ;
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
    background: rgba(0, 0, 0, 0) linear-gradient(to right, #16c9f6 0%, #16c9f6 0%, #16c9f6 100%) repeat scroll 0 0;
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
}
.logo img{
	border-radius: 100px;
}



.contactus {
	width: 100%;
	height: 100vh;
	padding: 80px 0;
	padding-top: 140px;
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
   /* background:  linear-gradient(330deg, #16c9f6 55%,  #fff 0%) ;*/

}

form button{

	border: 1px solid #50d1c0;
    border-radius: 100px;
    color: #50d1c0;
    font-size: 12px;
    font-weight: 500;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 13px 30px;
    text-decoration: none;
    background: transparent;

}

form:hover button{
	background: #fff;
	color:  #50d1c0;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.3);
}

::placeholder{
	font-size: 0.85rem;
}






	  	
	  </style>
</head>
<body>

<!-- **************** Header Part start ****************** -->

<div class="header" id="topheader">
	<nav class=" navbar navbar-expand-lg fixed-top">
		<div class="container text-uppercase pt-3 logo">
		<img src="images/logo.png">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto text-white">
				<li class="nav-item active">
					<a class="nav-link" href="index.html">Logout <span class="sr-only">(current)</span></a>
				</li>	
				
			</ul>
		</div>
		</div>
	</nav>


	<section class=" contactus ">
	<div class="container headings text-center">
		<h1 class="text-center font-weight-bold text-white">WELCOME TO ADMIN PORTAL </h1>
		<p class="text-capitalize pt-1 text-white">PLS SIGN IN TO PROCCED 🙂</p>
	</div>

	<div class="container">

		<div class="row">
			<div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">	
				<form action=" " method="post" >
				    <div class="form-group">
				     
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off">
				    </div>
				    <div class="form-group">
				
					    <input type="password" class="form-control" id="password" placeholder="password" name="password" autocomplete="off">
					 </div>
				    
			
					<div class="d-flex justify-content-center">
				    <button type="submit" class="text-center" name="submit" onclick="return checkvalidation()">Submit</button>
				    </div>
		    	</form>

		    </div>
		</div>
	</div>

</section>
	
</div>


<script type="text/javascript">
	
  	function checkvalidation(){
  		let email = document.getElementById('email').value;
  		let password = document.getElementById('password').value;
  		debugger;
  		
  		
  		if(email == ""){
  			alert("Please Fill the Email Id");
  			return false;
  		}

  		return true;
  		if(password == ""){
  			alert("Please Fill the password");
  			return false;
  		}

  		return true;
  	}
</script>

</body>
</html>




