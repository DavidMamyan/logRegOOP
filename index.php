<?php require_once 'core/init.php'; ?>
<?php 
	if (Session::exists('home')) {
		echo Session::flash('home');
	}

	#echo Session::get(Config::get('session/session_name'));
	$user = new User();
	if ($user->isLoggedIn()) {
	?>
	<h4>Hello <a href="profile.php?user=<?php echo $user->data()->username ?>"><?php echo $user->data()->username ?></a></h4>
	<ul>
		<li><a href="profile.php">Profile</a></li>
		<li><a href="logout.php">Logout</a></li>
		<li><a href="update.php">Update details</a></li>
		<li><a href="changepassword.php">Change password</a></li>
	</ul>
<?php
	if ($user->hasPermission('admin')) {
		echo "<h4>You are an admin.</h4>";
	}

	}else {
		echo "You need to <a href='login.php'>log in</a> or <a href='register.php'>register</a>";
	}
?>