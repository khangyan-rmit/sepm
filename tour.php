<?php require_once('initialize.php'); ?>

<?php $page_title = 'Tour Management'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div class="">
    <h3> Tour Management </h3>
        <form class="register" action="" method="">
            <label for="add"> Create tour: </label>
            <input name="add" type="button" onclick="window.location.href='add_tour.php'" value="Add" />
            <br/>
            <label for="edit"> Edit tour: </label>
            <input name="edit" type="button" onclick="window.location.href='edit_tour.php'" value="Change" />
            <br/>
            <label for="choose"> Edit tour types: </label>
            <input name="choose" type="button" onclick="window.location.href='edit_tour_type.php'" value="Set Types" />
            <br/>
            <label for="remove"> Delete tour: </label>
            <input name="remove" type="button" onclick="window.location.href='delete_tour.php'" value="Remove" />
            <br/>
        </form>
    </div>
</div>
