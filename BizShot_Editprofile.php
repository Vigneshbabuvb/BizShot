<?php session_start();
require 'sqlconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/editprofile.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:100,300,400" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script>
</head>
<body>
<?php 
	if(isset($_SESSION["username"])){
		$user = $_SESSION["username"];
	}
	
	
	$sql = "SELECT username,email_id,mobile_number FROM user_registration WHERE username = '".$user."'";
	$result = mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);
		$email_id = $row["email_id"];
		$mobile = $row["mobile_number"];	
	}
	
?>
        <header>
            <div class="header1">
                <div class="wrapper">
                    <a href="BusinessClap_landingPage.html"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>   
                    <div id="settings">                   
                        <i class="fa fa-sort-desc settings-btn" aria-hidden="true" onClick="dropdown()"></i>
                        <p class="username">Hello, <?php /*echo $user;*/ ?></p>
                        <img class="userprofile_pic_header" src="images/man-in-suit2.jpg" alt="userPicture" />
                         <div class="dropdown_menu">
                    	<a class="logout" href="BusinessClap_landingPage.html">Logout</a>
                    	  </div>
					</div>
                </div>
                </div>
                <div class="header2">
                <div class="wrapper">
                    <ul class="nav">
                       <i class="fa fa-bars hamburger_menu" id="hamburger" aria-hidden="true"></i>
                        <li><a href="BizShot_Article.html" class="articles">ARTICLES</a></li>
                        <li><a href="bizShotLandingPage.html"><img class="headerLogo" src="images/logo_BusinessClap.png" alt="Logo" /></a></li>
                        <li><a href="BizShot_QandA.html" class="QandA">Q&amp;A</a></li>
                    </ul>
                </div>
            </div>
        </header>
    <div class="content_area">
        <div class="wrapper">
            <div class="sidebar_left">
                <div class="userdetails">
                    <img class="userprofile_pic" src="images\userprofile_pic_post.jpg" alt="profilePic">
                    <h4>Username</h4>
                    <h6><?php echo $mobile; ?></h6>
                    <button class="follow">Follow</button>
                    <p class="email"><?php echo $email_id; ?></p>
                    <p class="location">Location<span style="float:right; margin-right:25px;"><i class="fa fa-pencil" aria-hidden="true" onClick="gotoedit()"></i></span>
</p>
                    <p class="current_work">Current Work</p>
                </div>
                <div class="area_of_interest">
                    <h4>Area of Interest</h4>
                    <div class="areas">
                        <div class="c1">
                            <p>Web Designing</p>
                        </div>
                        <div class="c2">
                            <p>Photoshop</p>
                        </div>
                        <div class="c3">
                            <p>Illustrator</p>
                        </div>
                        <div class="c4">
                            <p>Animation</p>
                        </div>
                        <div class="c5">
                            <p>VR</p>
                        </div>
                        <div class="c6">
                            <p>E-Publishing</p>
                        </div>
                        <div class="c7">
                            <p>Web Development</p>
                        </div>
                    </div>
                </div>
                <div class="sidebar_menu">
                    <p class="past_co">Past Coordinator</p>
                    <p class="present_co">Present Coordiantor</p>
                        <div class="container">
                            <p class="send_mes">Send Message</p>
                            <p class="new_co">Form new Coordination</p>
                            <p class="edit_co">Edit Coordination</p>
                        </div>
                </div>
            </div>
            <div class="posts">
                <div class="tab1">
                        <p class="followers">Followers</p>
                        <p class="followers_value">500</p>
                        <div class="separator"></div>
                        <p class="pro_view">Profile Views</p>
                        <p class="profile_views_value">100</p>
                </div>
                <div class="tab2">
                    <p class="sent_requests">Sent Requests</p>
                    <div class="user_identity">
                        <img class="pro_pic" src="images/man-in-suit2.jpg" alt="propic">
                        <p class="username">Username</p>
                        <p class="number">+91 9274837392</p>
                        <button class="bttn_follow">Following</button>
                    </div>
                    <div class="user_identity">
                            <img class="pro_pic" src="images/man-in-suit2.jpg" alt="">
                            <p class="username">Username</p>
                            <p class="number">+91 9274837392</p>
                            <button class="bttn_follow">Pending</button>
                    </div>
                    <div class="user_identity">
                            <img class="pro_pic" src="images/man-in-suit2.jpg" alt="">
                            <p class="username">Username</p>
                            <p class="number">+91 9274837392</p>
                            <button class="bttn_follow">Pending</button>
                    </div>
                </div>
                <div class="tab3">
                        <p class="Received_requests">Received Requests</p>
                        <div class="user_identity">
                            <img class="pro_pic" src="images/man-in-suit2.jpg" alt="">
                            <p class="username">Username</p>
                            <p class="number">+91 9274837392</p>
                            <button class="bttn_follow">Accept</button>
                        </div>
                        <div class="user_identity">
                                <img class="pro_pic" src="images/man-in-suit2.jpg" alt="">
                                <p class="username">Username</p>
                                <p class="number">+91 9274837392</p>
                                <button class="bttn_follow">Accept</button>
                        </div>
                        <div class="user_identity">
                                <img class="pro_pic" src="images/man-in-suit2.jpg" alt="">
                                <p class="username">Username</p>
                                <p class="number">+91 9274837392</p>
                                <button class="bttn_follow">Accept</button>
                        </div>
                </div>
                <div class="activities_title">
                    <p class="activity">Activites</p>
                    <div class="seperator_line"></div>
                </div>
                <div class="new_post_form">
                    <div class="post_type">
                        <label class="po_type" for="post_type">Select post type</label>
                        <input class="IDEA" name="post" type="radio">
                        <label class="idea_label" for="idea">IDEA</label>
                        <input type="radio" class="INVEST" name="post">
                        <label for="invest" class="invest_label">INVEST</label>
                    </div>
                    <div class="category_type">
                        <label for="category" class="ca_type">Select Category</label>
                        <select name="category" id="category">
                            <option value="E-Publishing">E-Publishing</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Web Designing">Web Designing</option>
                            <option value="Photoshop">Photoshop</option>
                            <option value="Animation">Animation</option>
                        </select>
                    </div>
                    <div class="write_post">
                        <textarea name="write_post" id="write_post" cols="10" rows="5"></textarea>
                    </div>
                    <button class="bttn_post">Post</button>
                </div>
                <div class="user_content">
                <div class="post1">
                        <div class="user_details">
                            <img class="userprofile_pic_post" src="images/userprofile_pic_post.jpg" alt="userPicture">
                            <p class="username_post">Username</p>
                            <p class="date">12 Nov 2017</p>
                            <p class="location">Chennai</p>
                            <button class="comment" onClick="view_prev_comments()"><i class="fa fa-comment" aria-hidden="true"></i></button>
                        </div>
                        <div class="message">
                            <p class="mes">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type
                            specimen book.</p>
                        </div>
                </div>
                 <div class="comment_box">
                              <input type="text" placeholder="Write your comment here..." />
				 </div>
                     <div class="prev_comments">
                        <table class="other-cmts">
                           <tr class="cmts">
                           	<td>
                            	<img src="images/userprofile_pic_post.jpg" style="height:40px;width:40px; clip-path:circle(20px at center);" alt="userprofilepic" />
                            </td>
                             <td class="cmt">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            </td>                            
                             </tr>
                              <tr class="cmts">
                              	<td>
                            	<img src="images/userprofile_pic_post.jpg" style="height:40px;width:40px; clip-path:circle(20px at center);" alt="userprofilepic" />
                            </td>
                                <td class="cmt">unknown printer took a galley of type and scrambled it to make a type</td>
                              </tr>
                       </table>
                      </div>
                  </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="wrapper">
            <div class="logo">
                <img src="images\logo_BusinessClap.png" alt="BuLogo">
                <p>&copy; 2017 BusinessClap.co</p>
            </div>
        </div>
    </footer>
</body>

<script>
	$(document).ready(function(e) {
        $("#hamburger").click(function() {
			if($(".sidebar_left").hasClass("left-side-collapsed")){
					$(".sidebar_left").toggle("slide");
					$(".sidebar_left").css("display","block");
					$(".posts").css("filter","brightness(100%)");
					$(".sidebar_left").removeClass("left-side-collapsed")
				}
			else{
					$(".sidebar_left").toggle("slide");
					$(".sidebar_left").addClass("left-side-collapsed");
					$(".posts").css("filter","brightness(50%)");
				}
			
			//$(".posts").css("filter","brightness(100%)")
			
		});
		
    });
	
/*	$(document).ready(function(e){
		$(".settings-btn").click(function(e) {
			console.log("run")
			if($(".dropdown_menu").style.display=="none"){
					$(".dropdown_menu").style.display="block";
			}
			else{
				$(".dropdown_menu").style.display=="none"
			}
        });	
	});*/
	var setting_btn = document.querySelector(".settings-btn");
	var dropdown_menu = document.querySelector(".dropdown_menu");
		function dropdown(){
			if(dropdown_menu.style.display == "none"){
					document.querySelector(".dropdown_menu").style.display="block";
				}
			else{
				document.querySelector(".dropdown_menu").style.display="none";
			}
		}
		
	var comment_btn= document.querySelector(".comment");
	var prev_cmt = document.querySelector(".prev_comments");
	var comment_box = document.querySelector(".comment_box");
	function view_prev_comments(){
		if(prev_cmt.style.display=="none"){
				prev_cmt.style.display = "block";
				comment_box.style.marginBottom="0px";
			}
		else{
				prev_cmt.style.display = "none";
				comment_box.style.marginBottom="20px";
			}
		}
	function gotoedit(){ 
		location.href = "BizShot_editdetails.php"
	}
	
</script>

</html>