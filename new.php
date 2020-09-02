<?php require_once('initialize.php'); ?>

<?php $page_title = 'New User'; ?>
<?php include('header.php'); ?>

<div>
    <form class="register" action="" method="post">
    <label for="username">Username</label>
		<input name="username" type="email" placeholder="sample@email.com" />
		<br/>
		<label for="password">Password</label>
		<input name="password" type="password" />
        <br/>
        <label for="role">Role</label>
        <select name="role">
            <option value="admin">Administrator</option>
            <option value="assist">Assistant</option>
        </select>
        <br/>
        <input type="submit" value="Submit" />
    </form>
</div>

<?php include('footer.php'); ?>