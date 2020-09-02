<?php require_once('initialize.php'); ?>

<?php $page_title = 'Location Management'; ?>
<?php include('header.php'); ?>

    <div class="home">
        <div class="">
        <h3> Location Management </h3>
            <form class="register" action="" method="">
                <label for="add"> Add location: </label>
                <input name="add" type="button" onclick="window.location.href='add_location.php'" value="Add" />
                <br/>
                <label for="edit"> Edit location: </label>
                <input name="edit" type="button" onclick="window.location.href='edit_location.php'" value="Change" />
                <br/>
                <label for="choose"> Select locations: </label>
                <input name="choose" type="button" onclick="window.location.href='choose_location.php'" value="Choose" />
                <br/>
                <label for="remove"> Delete locations: </label>
                <input name="remove" type="button" onclick="window.location.href='delete_location.php'" value="Remove" />
                <br/>
            </form>
        </div>
    </div>


<?php include('footer.php'); ?>