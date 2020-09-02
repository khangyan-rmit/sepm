<?php require_once('initialize.php'); ?>

<?php $page_title = 'Add location'; ?>
<?php include('header.php'); ?>


<div class="home">
    <div>
        <h2> Add a New Location </h2>
        <form class="register" action="" method="post" onsubmit="return validAddLoc()">
            <label for="name"> Name: </label>
            <input type="text" name="name" placeholder="Enter name of new location" />
            <br />
            <label for="cood"> Coordinates: </label>
            <input type="text" name="cood" id="coord" placeholder="Enter X Y Coordinates" />
            <span class="error" id="coodError"></span>
            <br />
            <label for="desc"> Description: </label>
            <input type="text" name="desc" placeholder="Enter a brief description" />
            <br />
            <label for="time"> Min-time: </label>
            <input type="number" name="time" placeholder="time in minutes" />
            <br />
            <label for="submit"> Create: </label>
            <input type="submit" name="submit" value="Add Location" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>