<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>	
	<script type="text/javascript" src="../js/jstz.js"></script>
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
<div id='menu'>

<a href='/'>Home</a>
<?php if ($user):?>
<a href='/posts/add'>Add a post</a>
<a href='/posts/users'>Members</a>
<a href='/users/profile'>Profile</a>
<a href='/users/logout'>Logout</a>
<?php else: ?> 
<a href='/users/signup'>Sign up</a>
<a href='/users/login'>Log in</a>
<?php endif; ?>

</div>

<br>

	<?php if(isset($content)) echo $content; ?>
	
</body>
</html>