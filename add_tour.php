<?php require_once('initialize.php'); ?>

<?php $page_title = 'Add tour'; ?>
<?php include('header.php'); ?>

<div>
    <div>
        <h2> Add a New tour </h2>
        <form class="register" action="" method="post">

            <label for="tour"> Name: </label>
            <input type="tour" name="name" placeholder="Enter name of new tour" />
            <br />
            <label for="type"> Type: </label>
            <select name="type">
                <option value="">Type 1</option>
                <option value="">Type 2</option>
                <option value="">Type 3</option>
                <option value="">Type 4</option>
            </select>
            <br />

            <fieldset>
                <label>Select locations: </label>
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
            </fieldset>

            <label for="time"> Min-time: </label>
            <input type="number" name="time" value="will be calculated" readonly/>
            <br />

            <label for="submit"> Create: </label>
            <input type="submit" name="submit" value="Add Tour" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>