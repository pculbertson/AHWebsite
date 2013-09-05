<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>Atlanta Harvest</title>
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="./font-awesome/css/font-awesome.min.css">
	<script src="./js/jquery-1.9.1.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,300,400,600,700,800" 
          rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./css/main.css">
	</head>
	<body>	
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="brand" href="index.html"><img src="resources/Atlanta Harvest.png"></a>
			</div>
		</div>
	</div>
	<div class="first container">
		<div class="row-fluid call-row">
				<div class="span6 header-img">
				<img src="./resources/lettuce.JPG">
				</div>
				<div class="span6 well call">
						<form action="index.php" method="post">
						<fieldset>
						<legend>Volunteer Signup</legend>
						<?php 
							if(isset($_POST['name'])) {  

								$mysqli = getConnection();

								if($stmt = $mysqli->prepare("insert into interest values (?, ?, ?)")) {
	
									$stmt->bind_param("sss", $_POST['name'], $_POST['email'], $_POST['skill']);

									if($stmt->execute()) {
										echo "Thanks. We'll be in touch.";
									}
									else {
										echo "Submission did not work, please try again.";
									}

									$stmt->close();
									$mysqli->close();

								}	

								function getConnection() {
									$db_hostname = 'localhost';
									$db_database = 'atlantaharvest';
									$db_username = 'root';
									$db_password = 'ahmysql';
									$mysqli = new mysqli($db_hostname, $db_username, $db_password, $db_database);
									return $mysqli;
								}		
							}					
						?>
						<label>Name</label>
						<input type="text" placeholder="Name" class="span6" name="name">
						<label>Email</label>
						<input type="text" placeholder="Email" class="span6" name="email">
						<label>Interests/Skills</label>
						<input type="text" placeholder="Interests/Skills" class="span6" name="skill">
						<br>
						<div class="submit-button">
						<input type="submit" class="btn btn-large btn-success submit-button">
						</div>
						</fieldset>
						</form>
				</div>
		</div>
	</div>
<div class="container">
	<hr>
		<div class="span8 offset2 F_header">
			 <p class="pcall"><b>City fresh food.</b></p>
			<p class="pcall">Coming soon to your neighborhood.</p>
		</div>
</div>
			


<div class="container">
	  <hr>
		<div class="row-fluid">
		  <div class="span4 F_header offset4">
			<p>Get Connected!</p>
				<div class="social-row">
					<div class="soc-icon"><a href="mailto:kevinjosue94@gmail.com?Subject=Atlanta Harvest"><i class="icon-envelope-alt icon-2x"></i></a></div>
					<div class="soc-icon"><a href="http://www.facebook.com"><i class="icon-facebook icon-2x"></i></a></div>
					<div class="soc-icon"><a href="http://www.twitter.com"><i class="icon-twitter icon-2x"></i></a></div>
					<div class="soc-icon"><a href="http://www.instagram.com"><i class="icon-instagram icon-2x"></i></a></div>
				</div>
			</div>
		</div>
</div>

	</body>
</html>