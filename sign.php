<?php
	session_start();
	if(empty($_SESSION['uid']))
	{
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<title>PES_BH|SignUP/LogIN</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link href="css/style2.css" rel="stylesheet">		
		<style>
		body
    	{
        	background-image: url("bg5.jpg");
        	background-size: 100%;
        	background-repeat: no-repeat;
        	background-attachment: fixed;
      	}		
    </style>
	</head>

	<body>
		<nav class="navbar navbar-inverse navbar-static-top navbar-wrapper">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
				  <a class="navbar-brand">
				    <img alt="PES" src="logo3.png">
				  </a>

		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">PES Boys Hostel</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
		        <li><a href="about.php">About</a></li>
		        <li><a href="contacts.php">Contacts</a></li>
		        
		      </ul>
		      <form action="sign.php" class="navbar-form navbar-right">
		     	<button type="button" class="btn btn-default" data-toggle="modal" data-whatever="@mdo">Log in</button>
		      </form>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>



		<!-- Begin SignUp/SignIn -->

		<div class="container-fluid">
			<div class="row">
			<div class="container col-md-3 col-sm-6">
				<section class="login">
					<link rel="stylesheet" type="text/css" href="css/loginstyle.css"/>
					<div class="titulo">Create student account</div>
					<form action="" method="post" enctype="application/x-www-form-urlencoded">
						<input type="text" name="name" required title="Your name" placeholder="Name">
		    			<input type="text" name="uid" required title="UserID required" placeholder="USN / Emp.ID">
		    			<input type="text" name="email" required title="E-mail ID required" placeholder="E-mail ID">
		       			<input type="password" name="pswd" required title="Password required" placeholder="Password" data-icon="x">
		       			<input type="password" name="cpswd" required title="Confirm password" placeholder="Confirm password" data-icon="x">
		       			<input type="submit" name="register" class="enviar" value="Register" method="post"/>
		    		</form>
				</section>
			</div>
			
			
			<div class="container col-md-3 col-sm-6">
				<section class="login">
					<link rel="stylesheet" type="text/css" href="css/loginstyle.css"/>
					<div class="titulo">Student Login</div>
					<form action="" name="" id="l_form" method="post" enctype="application/x-www-form-urlencoded">
		    			<input type="text" name="uid" required title="UserID required" placeholder="USN" autofocus>
		       			<input type="password" name="pswd" required title="Password required" placeholder="Password">
		        		<div class="olvido">		        		
		       			<input type="submit" name="login" class="enviar" value="Log in" method="post"/>
		    		</form>
				</section>
			</div>

			<div class="container col-md-3 col-sm-6">
				<section class="login">
					<link rel="stylesheet" type="text/css" href="css/loginstyle.css"/>
					<div class="titulo">Employee Login</div>
					<form action="emp_login.php" name="loginemp"  method="post" enctype="application/x-www-form-urlencoded">
		    			<input type="text" name="empid" required title="UserID required" placeholder="Emp.ID" autofocus>
		       			<input type="password" name="pswd" required title="Password required" placeholder="Password">
		        		<div class="olvido">		        		
		       			<input type="submit" name="loginemp" class="enviar" value="Log in" method="post"/>
		    		</form>
				</section>
			</div>

			<div class="container col-md-3 col-sm-6">
				<section class="login">
					<link rel="stylesheet" type="text/css" href="css/loginstyle.css"/>
					<div class="titulo">LG / Parent Login</div>
					<form action="lgp_login.php" id="l_form" method="post" enctype="application/x-www-form-urlencoded">
		    			<input type="text" name="lgpid" required title="UserID required" placeholder="Lgp.ID" autofocus>
		       			<input type="password" name="pswd" required title="Password required" placeholder="Password">
		        		<div class="olvido">		        		
		       			<input type="submit" name="loginlgp" class="enviar" value="Log in" method="post"/>
		    		</form>
				</section>
			</div>
			</div>
		</div>

		<!-- End SignUp/SignIn -->



		<!-- Footer begin -->
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<h4>Contact Address</h4>
						<address>
							PESIT Campus, 100 Feet Ring Road,<br>
							BSK 3rd Stage, Hosakerelli,<br>
							Bangalore - 560 085
						</address>
					</div>
				</div>
			<div class="bottom-footer">
				<div class="col-md-5">© PES Institutions - All rights reserved.</div>
					<div class="col-md-7">
						<ul class="footer-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contacts.html">Contacts</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<!-- Footer end -->


		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
		function validate(){
		    var login = document.getElementById('l_form');
		    if (login.uid.value === "abc") {
		        alert(name);
		    } else {
		        login.uid.focus();
		    }
		}
	</script>
	</body>
</html>







<!-- Registration / Login verification begin -->

		<?php
			$test=1;
			if(!empty($_POST['login']))
			{
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "Hostel";
				$test++;
				$flag=FALSE;
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection

				if ($conn->connect_error)
				{
				    die("Connection failed: " . $conn->connect_error);
				}


				$uid=$_POST['uid'];
				$pswd=$_POST['pswd'];

				$sql = "SELECT userID,pswd,name FROM accounts";

				$result=mysqli_query($conn,$sql);

				while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				    if(($uid===$row{'userID'}) and ($pswd===$row{'pswd'}))
				   	{	
				   		$flag=TRUE;
				   		session_start();

				   		$_SESSION['uid']=$uid;
				   		$_SESSION['name']=$row{'name'};
				   		break;

				   	}
				}
				//echo "<script>alert(\"Test alert , flag=$flag.\")</script>";
				if($flag)
				{
					//$script="<script>function{alert('Successfully Logged in');}</script>"
					//echo '$script';
					//echo "<script>alert(\"Test alert.\")</script>";
					echo "<script type='text/javascript'>window.location.href = 'forms.php';</script>";
		        exit();
					//header("location: index.html?");
					exit();
				}
				else
				{
					?>

						<script>
							function fail()
							{
								alert("Oops! looks like something was wrong , please try to log in again.");
							}
							fail();
						</script>

					<?php
				}


				$conn->close();
			
			}
			else if(!empty($_POST['register']))
			{
				$test++;
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "Hostel";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection

				if ($conn->connect_error)
				{
				    die("Connection failed: " . $conn->connect_error);
				} 

				$uid=$_POST['uid'];
				$pswd=$_POST['pswd'];
				$cpswd=$_POST['cpswd'];
				$email=$_POST['email'];
				$name=$_POST['name'];

				$sql = "INSERT INTO accounts(name,userID,email,pswd) VALUES('$name','$uid','$email','$pswd')";

				if($pswd===$cpswd)
				{
					if ($conn->query($sql) === TRUE) 
					{
					    //$last_id = $conn->insert_id;
					    //echo "New record created successfully. Last inserted ID is: " . $last_id;
					    echo "<script>alert(\"Registration successful.\")</script>";
					    //header("location: sign.php");
						//exit();
					}
					else
					{
					    //echo "Error: " . $sql . "<br>" . $conn->error;
					    echo "<script>alert(\"Seems like someone has an account with these UserID and E-mail_ID . Please try to register using other values for them.\")</script>";
					}
				}
				else
				{
					echo "<script>alert(\"Please enter same password in both PASSWORD and CONFIRM PASSWORD fields.\")</script>";
				}

				$conn->close();
			}
			else if($test!=1)
			{
				echo "<script>alert(\"Seems like something was wrong.Try again with valid field values.\")</script>";
			}

		}
		else
		{
			echo "<script>alert(\"You are already logged in.\"); window.location.href=\"complaint.php\";</script>";
		}
	?>

<!-- Registration / Login verification end -->


