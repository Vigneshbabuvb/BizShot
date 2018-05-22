<?php 
session_start();
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width , intial-scale=1">
<title>Untitled Document</title>
<link rel="stylesheet" href="css/landingPage.css">
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:100,300,400" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<?php 
	require 'sqlconnect.php';
	
	if(isset($_POST["name"],$_POST["email"],$_POST["passwd"],$_POST["mobile"])){
		$username = mysqli_real_escape_string($conn, $_POST["name"]);
		$email_id = mysqli_real_escape_string($conn, $_POST["email"]);
		$password = mysqli_real_escape_string($conn, $_POST["passwd"]);
		$mobile = mysqli_real_escape_string($conn, $_POST["mobile"]);
		$sql = "INSERT INTO user_registration (username,password,email_id,mobile_number) VALUES ('".$username."','".$password."','".$email_id."',".$mobile.")";
		$result = mysqli_query($conn , $sql);
	}
?>
<header>
	<div class="wrapper">
		<div class="logo">
			<img src="images/logo_BizShot.png" alt="">
		</div>
		<div class="menus">
			<ul>
				<li><a href="BizShot_Blog.html">Blog</a></li>
				<li><button id="login" onClick="loginForm()">Login</button></li>
			</ul>
		</div>
	</div>
</header>
<div class="container">
	<div class="banner">
		<div class="wrapper">
			<div class="bannerText">
				<p>Establish your ideas and start your business today</p>
			</div>
			<div class="signupForm">
				<div class="signuptitle">Begin your <span>ideas</span>&nbsp; here</div>
				<div class="formContent">
					<form action=""  method="post">
                    	<div class="name_content">
                        	<label for="name">Name</label>
							<input type="text" class="name" name="name">
                        </div>
						<div class="email_content">
                        	<label for="emailId">Email id</label>
							<input type="email" class="email" name="email">
                        </div>
						<div class="pass_content">
                        	<label for="pass">Password</label>
							<input type="password" class="passwd" name="passwd">
                        </div>
						<div class="mobile_content">
                        	<label for="mobile">*Mobile</label>
							<input type="text" class="mobile" name="mobile">
                        </div>
						<input type="submit" value="Signup">
					</form>
                    <?php 
						if(mysqli_affected_rows($conn)>0){
							echo "<p style='color:green; text-align:center; margin-top:25px;'>Inserted Succesfully</p>";	
						}
						else{
							echo "<p style='color:red'>Insert failed</p>";		
						}
					
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="wrapper">
			<div class="contentTitle">
				<h3>What do we have for you?</h3>
			</div>
			<div class="section1">
				<div class="illustration1">
					<img src="images/illus_1.png" alt="illustration1">
				</div>
				<div class="explanation1">
					<p class="title1">Got an idea to express?</p>
					<p class="explain1">Suddenly struck with an awesome business idea that you are eager to deploy and implement it.. </p>
				</div>
			</div>
			<div class="section2">
				<div class="explanation2">
					<p class="title2">Post it and get notified</p>
					<p class="explain2">Post your wonderful ideas on BizShot and you will be noticed by the industry leading business people who are ready to fund for your project.</p>
				</div>
				<div class="illustration2">
					<img src="images/illus_2.png" alt="illustration2">
				</div>
			</div>
			<div class="section3">
				<div class="illustration3">
					<img src="images/illus_3-01-01.png" alt="illustration3">
				</div>
				<div class="explanation3">
					<p class="title3">Get started with your business</p>
					<p class="explain3">Interested funding people contact you to keep an business agreement and you can bring your ideas to reality after that. Start businessing!</p>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<div class="wrapper">
	<div class="foot_col1">
        <ul>
            <li><h3>FYI</h3></li>
            <li><a href="#"> About BusinessClap</a></li>
            <li><a href="#">Leaderboard</a></li>
            <li><a href="#">Success stories</a></li>
        </ul>
    </div>
    <div class="foot_col2">
        <ul>
            <li><h3>READ</h3></li>
            <li><a href="#">Articles</a></li>
            <li><a href="#">Q&amp;A </a></li>
        </ul>
    </div>
    <div class="foot_col3">
        <ul>
            <li><h3>LEGAL</h3></li>
            <li><a href="#">Privacy policy</a></li>
            <li><a href="#">Terms of service</a></li>
        </ul>
    </div>
    <div class="foot_col4">
        <ul>
            <li><h3>FOLLOW</h3></li>
            <li><a href="#"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i>
            </a></li>
            <li><a href="#"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
            </a></li>
            <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
            </a></li>
            <li><a href="#"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
            </a></li>
        </ul>
    </div>
    </div>
    <div class="wrapper">
    <div class="logofooter">
        <img src="images/logo_BizShot.png" alt="BizLogo">
        <p>&copy; 2018 BizShot</p>
    </div>
   </div>
</footer>
<div class="login_form">
	<div class="login_content">
		<form action="validate_login.php" method="post">
			<div class="login_username">
				<label for="username">Username</label>
				<input type="text" id="username" name="username">
			</div>
			<div class="login_password">
				<label for="password">Password</label>
				<input type="text" id="password" name="password">
			</div>
			<input type="submit" value="Login" id="login_btn">
		</form>
	</div>
</div>
<div class="overlay" onClick="hide_login()"></div>
<script>
	function loginForm(){
		document.querySelector(".login_form").style.display="block";
		document.querySelector(".overlay").style.display="block";
	}
	
	function hide_login(){
		document.querySelector(".login_form").style.display="none";
		document.querySelector(".overlay").style.display="none";
	}
</script>
</body>
</html>
