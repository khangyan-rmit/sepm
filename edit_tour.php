<?php require_once('initialize.php'); ?>

<?php $page_title = 'Edit tour'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div>
        <h2> Edit an Existing Tour </h2>
        <form action="" method="post">
            <label for="edittour"> Edit Tours: </label>
            <select name="edittour">
                <option value="">Tour 1</option>
                <option value="">Tour 2</option>
                <option value="">Tour 3</option>
                <option value="">Tour 4</option>
            </select>
            <input type="submit" name="submit" value="Edit" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>