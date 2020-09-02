<?php require_once('initialize.php'); ?>

<?php $page_title = 'Edit types'; ?>
<?php include('header.php'); ?>

<div class="home">
    <div>
        <h2> Edit Tour Types </h2>
        <form action="" method="post">
            <label for="edittype"> Edit Types: </label>
            <select name="edittype">
                <option value="">Type 1</option>
                <option value="">Type 2</option>
                <option value="">Type 3</option>
                <option value="">Type 4</option>
            </select>
            <input type="submit" name="submit" value="Edit" />
        </form>
    </div>
</div>

<?php include('footer.php'); ?>