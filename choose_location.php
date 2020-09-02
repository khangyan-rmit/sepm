<?php require_once('initialize.php'); ?>

<?php $page_title = 'Copy Locations'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div>
        <form class="register" action="" method="post">
            <label for="location1">location1
            <input name="location1" type="checkbox" value="location1" />
            </label>
            <br/>
            <label for="location2">location2
            <input name="location2" type="checkbox" value="location2" />
            </label>
            <br/>
            <label for="location3">location3
            <input name="location3" type="checkbox" value="location3" />
            </label>
            <br/>
            <label for="submit">Submit
            <input name="submit" type="submit" value="Copy" />
            </label>   
        </form>
    </div>
</div>

<?php include('footer.php'); ?>