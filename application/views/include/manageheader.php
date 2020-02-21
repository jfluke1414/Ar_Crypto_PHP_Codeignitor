<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="www.w3.org/1999/xhtml/index.html">
<head>
<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<link rel="shortcut icon" href="http://218.234.20.166/favicon.png" type="image/x-icon"/>
<link rel="icon" href="http://218.234.20.166/favicon.png" type="image/x-icon" />


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/assets/css/manage.css" type="text/css">
<link rel="stylesheet" href="/assets/css/ui/jquery-ui.min.css" type="text/css">
<link rel="stylesheet" href="/assets/css/manage_menu.css" type="text/css">
<link rel="stylesheet" href="/assets/css/main.css" type="text/css">

<script type="text/javascript" src="/assets/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/assets/js/UI/jquery.js"></script>
<script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>


<script type="text/javascript" src="/assets/js/manage_avds.js"></script>


<title>AVDS</title>
</head>

<body>
<div id="wrap">
	<div class="sub_nav_all">
		<div class="sub_nav">
			<div class="logo"><a href="/Main"><img src="/assets/images/logo.png" alt="" align="middle"/><img src="/assets/images/ci.png" alt="" align="middle"/></a></div>

				
  
  <div class="container">
	  <div id="header">
	  <? if($this->session->userdata('isadmin')){?>	  	
					<a href="#" id="menu-trigger">Menu<span class="arrow"></span></a>
					<div id="menu">
						<div class="column">
						<h3>Lists</h3>
						
							<ul>
								<li><a href="/Manage/inquiry_lists">Inquiry List</a></li>
								<li><a href="/Manage/news_lists">News List</a></li>								
							</ul>
						
						</div>
						
						<div class="column">
						<h3>Writing</h3>
						
							<ul>
								<li><a href="/Manage/inquiry">Inquiry Writing</a></li>
								<li><a href="/Manage/write">News Writing</a></li>
							</ul>
						
						</div>
						
						<div class="column">
						<h3>Logout</h3>
						
							<ul>
								<li><a href="/Manage/logout">Logout</a></li>
							</ul>
						
						</div>
					</div>
				<?}?>
					</div></div>
					
					
					
			</div>
		</div>
    </div>
     
