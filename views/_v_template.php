<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	
	<script type="text/javascript" src="../js/jstz.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	<style>
	@media screen and (max-width: 980px) {
	body {
		color: #000000;
		font-size: 16px;
		font-style: normal;
		font-weight: normal;
		font-family: Helvetica, Arial, sans-serif;
		background-image: url("../media/phone.png");
		background-origin: padding-box;
		background-size: auto;
		background-attachment: scroll;
		background-clip: border-box;
	}

	}


	body {
		color: #000000;
		font-size: 16px;
		font-style: normal;
		font-weight: normal;
		font-family: Helvetica, Arial, sans-serif;
		background-image: url("../media/texture.png");
		background-origin: padding-box;
		background-size: auto;
		background-attachment: scroll;
		background-clip: border-box;
	}

	.error {
		color:#FF0000;
	}
	.nav-item{
		color: rgb(215, 215, 215);
		font-size: 20px;
		font-style: normal;
		font-weight: normal;
		margin-bottom: 10px;
		margin-left: 10px;
		margin-right: 10px;
		margin-top: 10px;
		outline-color: rgb(215, 215, 215);
		outline-style: none;
		outline-width: 0px;
		padding-bottom: 7px;
		padding-left: 0px;
		padding-right: 0px;
		padding-top: 9px;
		text-align: left;
		height: 50px;
		text-decoration: none;
		vertical-align: baseline;
		width: 210px;
	}
	#menu{
		
		background-color:#000000;
		margin-left: 0px;
		margin-right: 0px;
		font-family: Helvetica, Arial, sans-serif;

	}

	.InputButton{
		font-family: Helvetica, Arial, sans-serif;
		height: 29px;
		text-decoration: none;
		vertical-align: baseline;
		width: 15%;
		font-size: 16px;

	}
	.InputField{
		width: 15%;
		font-size: 16px;

	}
	</style>
	
</head>

<body>	
<div id='menu'>

<a href='/' class="nav-item">Home</a>
<?php if ($user):?>
<a href='/posts/add' class="nav-item">Add a post</a>
<a href='/posts/users' class="nav-item">Members</a>
<a href='/users/profile' class="nav-item">Profile</a>
<a href='/users/logout' class="nav-item">Logout</a>
<?php else: ?> 
<a href='/users/signup' class="nav-item">Sign up</a>
<a href='/users/login' class="nav-item">Log in</a>
<?php endif; ?>

</div>

<br>

	<?php if(isset($content)) echo $content; ?>
	
</body>
</html>