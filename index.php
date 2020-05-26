<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<!-- SECTION -->
<section>
    <div class="container">
        <div  class="row p-5">
            <div class="col-md-5 mr-auto">
                <!-- MESSAGE FOR ACTIONS -->
                <?php 
                if(isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_style'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php session_unset(); }?>

                <?php 
                if(isset($_SESSION['message_wrong'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_style_wrong'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message_wrong']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php session_unset(); }?>
                <!-- MESSAGE FOR UPDATE -->
                <?php 
                if(isset($_SESSION['message_update'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_update_color'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message_update']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php session_unset(); }?>

                <!-- MESSAGE DELETE -->
                <?php 
                if(isset($_SESSION['message_delete'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_delete_color'] ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message_delete']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php session_unset(); }?>

                <form action="register.php" method="POST" class="form-group">
                    <h2>¡Register!</h2>
                    <div class="form-input">
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-input">
                        <textarea name="text" cols="20" rows="10" class="form-control" placeholder="Task"></textarea>
                    </div>
                    <div class="form-input">
                        <button type="submit" name="button" class="form-control btn btn-success">Send</button>
                    </div>
                </form>
            </div>
            <div class="col-md-7" ml-auto style="margin-top: 20px">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th class="th">Title</th> 
                               <th class="th">Activities</th>
                               <th class="th">Edit</th>
                               <th class="th">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $query = $dbh->query("SELECT * from register");
                            while ($row = $query->fetch()){ ?>
                                <tr>
                                    <td class="line"><?php echo $row['tittle']; ?></td>
                                    <td class="line"><?php echo $row['task']; ?></td>
                                    <td><a href="modify.php?id=<?php echo $row['id'];?>"><i class="fas fa-user-edit btn btn-primary"></i></a></td>
                                    <td><a href="delete.php?id=<?php echo $row['id']?>"><i class="fas fa-trash-alt btn btn-primary"></a></td>
                                </tr>
                                
                            <?php }?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>
<!-- FOOTER -->
<footer>

</footer>

<?php include("includes/footer.php")?>