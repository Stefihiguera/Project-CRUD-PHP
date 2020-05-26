<?php
include("db.php");

if($_GET['id']){
    $id = $_GET['id'];
    $query = $dbh->query("SELECT * FROM `register` WHERE id = '$id'");
    $row = $query->fetch();
    $id = $row['id'];
}
?>

<?php include("includes/header.php"); ?>

    <div class="row p-5">
        <div class="col-md-4 m-auto">
            <form action="update.php" method="POST"  class="form-group">
                <h2 class="text-center">¡Edit Task!</h2>
                <div class="form-input mt-10">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                </div>
                <div class="form-input mt-10">
                    <input type="text" name="title" class="form-control" value="<?php echo $row['tittle']; ?>" placeholder="New Task">
                </div>
                <div class="form-input mt-10">
                    <textarea name="text" cols="20" rows="10"  class="form-control" value="<?php echo $row['task']; ?>" placeholder="New Description"></textarea>
                </div>
                <button type="submit" class="form-control btn btn-lg btn-success mt-10" name="button">Update</button>
            </form>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
