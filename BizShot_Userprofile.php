<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/userprofile.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto:100,300,400" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="header1">
            <div class="wrapper">
                        <a href="BusinessClap_landingPage.html"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
                        <div id="settings">                    
                        <i class="fa fa-sort-desc settings-btn" aria-hidden="true" onClick="dropdown()"></i>
                        <p class="username">Hello, User</p>
                        <img class="userprofile_pic_header" src="images/man-in-suit2.jpg" alt="userPicture"> 
                        	<div class="dropdown_menu">
                    			<a class="logout" href="BusinessClap_landingPage.html">Logout</a>
                    	  	</div>          
                        </div>     
            </div>
        </div>
        <div class="header2">
            <div class="wrapper">
                <div id="header_menu">
                 <ul class="nav">
					<li><a href="BizShot_Article.html" class="articles">ARTICLES</a></li>
					<li><a href="bizShotLandingPage.html"><img class="headerLogo" src="images/logo_BusinessClap.png" alt="Logo" /></a></li>
					<li><a href="BizShot_QandA.html" class="QandA">Q&amp;A</a></li>
                 </ul>
                </div>
             </div>
        </div>
    </header>
    <div class="content_area">
        <div class="wrapper">
            <div class="userdetails">
                <img class="userprofile_pic" src="images\userprofile_pic_post.jpg" alt="profilePic">
                <h4>Username</h4>
                <h6>+91 9276937492</h6>
                <button class="follow">Follow</button>
                <p class="email">username@email.com</p>
                <p class="location">Location</p>
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
                <button class="send_message">Send Message</button>
            </div>  
            <div class="info">
                <h4 class="success">Successfull Coordinations</h4>
                <p class="success_value">500 +</p>
                <h4 class="ideas">Ideas posted</h4>
                <p class="ideas-value">15</p>
                <h4 class="invests">Invests done</h4>
                <p class="invests_value">25</p>
            </div>
            <div class="followers_tab">
                <h4 class="followers">Followers</h4>
                <p class="followers_value">300</p>
                <div class="seperator"></div>
                <h4 class="mutual">Mutual Followers</h4>
                <p class="mutual_value">5</p>
            </div>
            <div class="postings">
            <div class="user-content">
            <div class="post1">
                <div class="user_details">
                    <img class="userprofile_pic_post" src="images/userprofile_pic_post.jpg" alt="userPicture">
                    <p class="username_post">Username</p>
                    <p class="date">12 Nov 2017</p>
                    <p class="location">Chennai</p>
                    <button class="comment"  onClick="view_prev_comments()"><i class="fa fa-comment" aria-hidden="true"></i></button>
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
            <div class="user-content">
            <div class="post1">
                <div class="user_details">
                    <img class="userprofile_pic_post" src="images/userprofile_pic_post.jpg" alt="userPicture">
                    <p class="username_post">Username</p>
                    <p class="date">12 Nov 2017</p>
                    <p class="location">Chennai</p>
                    <button class="comment"  onClick="view_prev_comments()"><i class="fa fa-comment" aria-hidden="true"></i></button>                    </button>
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
<script>
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
</script>
</body>
</html>
