<!DOCTYPE html>
<html>
<head>
	<title><?php if(isset($title)) echo $title; ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
					
	<!-- Controller Specific JS/CSS -->
	<?php if(isset($client_files_head)) echo $client_files_head; ?>
	
</head>

<body>	
<div id='menu'>

<a href='/'>Home</a>
<?php if ($user):?>

<a href='/users/logout'>Logout</a>
<a href='/users/profile'>Profile</a>

<?php else: ?>
<a href='/users/signup'>Sign up</a>
<a href='/users/login'>Log in</a>
<?php endif; ?>

</div>

<br>

	<?php if(isset($content)) echo $content; ?>
	
</body>
</html>