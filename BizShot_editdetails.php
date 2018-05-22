<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
	div.edit_form{
	width: 50%;
	height: auto;
	overflow: hidden;
	background-color:#fff;
	padding:50px 10px;
	position: fixed;
	top:130px;
	left:25%;
	z-index:200;
	border-radius: 10px;
}
div.edit_content{
	height: auto;
	padding:30px;
	box-sizing: border-box;
}

/*.edit_content>form{
	text-align:center;
}*/

form>input,form>select{
	display:block;
	margin-bottom:10px;
}

form>input[type="text"]{
	width:90%;
	height:30px;
	padding:5px 10px 5px 10px;
	box-sizing:content-box;
	font-size:16px;
	font-family:"Lato";
	font-weight:400;
}

form>input[type="button"],form>input[type="submit"]{
	width:90%;
	height:30px;
	padding:5px 10px 5px 10px;
	box-sizing:content-box;
	font-size:16px;
	font-family:"Lato";
	font-weight:600;
	border:none;
	background-color:#3a539b;
	color:#fff;
	margin-top:15px;
	border-radius:5px;
}

.title{
	font-size:25px;
	font-family:"Lato";
	font-weight:400;
	text-align:center;
	margin:25px 0px 25px 0px;

}

</style>
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:100,300,400" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
	require 'sqlconnect.php';
	session_start();
	if(isset($_POST["location"],$_POST["work"],$_POST["area_of_interest"],$_SESSION["username"],$_SESSION["userid"])){
		$areas = "";
		foreach($_POST["area_of_interest"] as $interest){
				$areas .= $interest." ";
				//echo $interest;
			}
		echo $areas;
		$sql = "INSERT INTO user_edit_profile (username,user_id,location,current_work,area_of_interest) VALUES ( '".$_SESSION["username"]."',".$_SESSION["userid"].",'".$_POST["location"]."','".$_POST["work"]."','".$areas."')";
		echo $sql;
		$res = mysqli_query($conn,$sql);
	}
 ?>
<div class="title">
	Edit Details
</div>
<div class="edit_form">
	<div class="edit_content">
		<form action="" method="post">
			<input type="text" name="location" placeholder="Location">
            <input type="text" name="work" placeholder="current work">
            <select id="lstFruits" multiple="multiple" name="area_of_interest[]">
                <option value="Web Designing">Web Designing</option>
                <option value="Photoshop">Photoshop</option>
                <option value="Illustrator">Illustrator</option>
                <option value="E-Publishing">E-Publishing</option>
                <option value="Web Development">Web Development</option>
        	</select>
            <!--<input type="button" id="btnSelected" value="Get Selected" />-->
			<input type="submit" value="Make Changes" id="login_btn">
		</form>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('#lstFruits').multiselect({
               // includeSelectAllOption: true
            });
            $('#btnSelected').click(function () {
                var selected = $("#lstFruits option:selected");
                var message = "";
                selected.each(function () {
                    message += $(this).text() + " " + $(this).val() + "\n";
                });
                alert(message);
            });
    });
</script>
</body>
</html>