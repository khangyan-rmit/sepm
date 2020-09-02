<?php require_once('initialize.php'); ?>

<?php $page_title = 'Delete Location'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div>
        <form class="register" action="" method="post">
            <label for="username">Name:</label>
            <input name="username" type="text" placeholder="Enter name of location" />
            <br/>
            <label for="submit">Submit</label>
            <input name="submit" type="submit" value="Delete Location" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>