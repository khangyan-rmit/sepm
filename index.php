<?php require_once('initialize.php'); ?>

<?php $page_title = 'Login'; ?>

<?php include('header.php'); ?>


<div class="login">
	<form class="register" action="" method="post">
		<label for="username">Username:</label>
		<!-- <span class="input-group-addon" id="basic-addon1">Username </span> -->
		<input name="username" type="email" placeholder="sample@email.com" />
		<br/>
		<label for="password">Password:</label>
		<input name="password" type="password" />
		<br/>
		<label for="submit">Submit:</label>
		<input type="submit" value="Login" />
		<br/>
		<label for="new">Create new account:</label>
		<input name="new" type="button" onclick="window.location.href='new.php'" value="Register">
	</form>
</div>


<?php include('footer.php'); ?>