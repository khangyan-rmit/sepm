<?php require_once('initialize.php'); ?>

<?php $page_title = 'Delete Tour'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div>
        <form class="register" action="" method="post">
            <label for="username">Name:</label>
            <input name="username" type="text" placeholder="Enter name of tour" />
            <br/>
            <label for="submit">Submit</label>
            <input name="submit" type="submit" value="Delete Tour" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>