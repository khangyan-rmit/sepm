<?php require_once('initialize.php'); ?>

<?php $page_title = 'User Management'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div>
        <form class="register" action="" method="post">
            <label for="username">Enter Username:</label>
            <input name="username" type="text" placeholder="sample@email.com" />
            <br/>
            <label for="submit">Submit</label>
            <input name="submit" type="submit" value="Deactivate User" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>