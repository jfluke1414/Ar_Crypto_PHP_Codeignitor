<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="www.w3.org/1999/xhtml/index.html">-->

<!doctype html>
<html>
<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta http-equiv="content-type" content="application/json;charset=UTF-8" />



<meta name="viewport" content="width=device-width, initial-scale=0.0"/>
<!--<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=yes">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />-->

<!--<link rel="shortcut icon" href="http://218.234.20.166/favicon.png" type="image/x-icon"/>
<link rel="icon" href="http://218.234.20.166/favicon.png" type="image/x-icon" />-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<link rel="stylesheet" href="/assets/css/ui/jquery-ui.css" type="text/css">
<link rel="stylesheet" href="/assets/css/ui/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="/assets/css/ui/jquery-ui.structure.css" type="text/css">
<link rel="stylesheet" href="/assets/css/ui/jquery-ui.structure.min.css" type="text/css">
<link rel="stylesheet" href="/assets/css/ui/jquery-ui.theme.css" type="text/css">
<link rel="stylesheet" href="/assets/css/ui/jquery-ui.theme.min.css" type="text/css">


<link rel="stylesheet" href="/assets/css/bxslides/jquery.bxslider.css" type="text/css">
<link rel="stylesheet" href="/assets/css/bxslides/jquery.bxslider.min.css" type="text/css">

<!-- <link rel="stylesheet" herf="/assets/css/simpleslide/jquery.simplyscroll.css" type="text/css"> -->

<link rel="stylesheet" href="/assets/css/manage.css" type="text/css">
<link rel="stylesheet" href="/assets/css/ui/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="/assets/css/manage_menu.css" type="text/css">
<link rel="stylesheet" href="/assets/css/main.css" type="text/css">


<script type="text/javascript" src="/assets/js/ui/jquery.js"></script>
<script type="text/javascript" src="/assets/js/ui/jquery-ui.js"></script>

<script type="text/javascript" src="/assets/js/crypto.js"></script>

<script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="/assets/js/pdfobject.js"></script>



<script type="text/javascript" src="/assets/js/bxslides/jquery.bxslider.js"></script>
<script type="text/javascript" src="/assets/js/bxslides/jquery.bxslider.min.js"></script>

<!-- <script type="text/javascript" src="/assets/js/simpleslide/jquery.simplyscroll.js"></script> -->
<!-- <script type="text/javascript" src="/assets/js/simpleslide/jquery.simplyscroll.min.js"></script> -->

<script type="text/javascript" src="/assets/js/rolVideo.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>






<title>JFLUKE</title>
</head>


<body>
<div id="wrap">

<!-- <embed src="/assets/music/interstellar_first_step.mp3" autostart="true"> -->
<!-- <embed src="/assets/music/adventure_of_a_lifetime.mp3" type="audio/mp3" autostart="true" hidden="true"> -->


 		<audio autoplay controls loop style="height:20px;">
			<!-- <source src="/assets/music/adventure_of_a_lifetime.mp3" type="audio/mp3"> -->
          	<source src="/assets/music/ost_new_world.mp3" type="audio/mp3">
        </audio>
        
	<div class="sub_nav_all">
		<div class="sub_nav">
			
			<div>
				<ul>
					<li><a href="/index.php/main">BOARD</a></li>
					<li><a href="/index.php/Functions">ESTIMATE</a></li>
					
                    <!-- <li><a href="/index.php/Cases">WATING</a></li> -->

                    <!-- <li><a href="/index.php/Notice/notice_1">WATING</a></li> -->                    
                    <li><a href="javascript:wating_notice();">WATING</a></li>
                    
					<!-- <li><a href="/index.php/Support">WATING</a></li> -->
					<li><a href="javascript:wating_notice();">WATING</a></li>
					
					<!-- <li><a href="/index.php/Company">WATING</a></li> -->
					<li><a href="javascript:wating_notice();">WATING</a></li>

					
					<?php 
					if($this->session->userdata('user_id')){
					?>
						<!-- <li><a onclick="return ckeck_logout_Function()" href="User/logout">Logout</a></li> -->
						<li><a class="user_logout">Logout</a></li>
						<a class="user_setting">Setting</a>
					<?php 
					} else {
					?>
						<li><a class="user_signin">LOGIN</a>
						<a class="user_signup">SIGN UP</a></li>
					<?php
					}
					?>
					
					<!-- <div id="user_signup_dialog" name="user_signup_dialog"> -->
					
					<!-- </div> -->
					
				</ul>

			</div>
		</div>
    </div>
    

