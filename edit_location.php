<?php require_once('initialize.php'); ?>

<?php $page_title = 'Edit location'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div>
        <h2> Edit an Existing Location </h2>
        <form action="" method="post">
            <label for="editloc"> Edit Locations: </label>
            <select name="editloc">
                <option value="">Location 1</option>
                <option value="">Location 2</option>
                <option value="">Location 3</option>
                <option value="">Location 4</option>
            </select>
            <input type="submit" name="submit" value="Edit" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>