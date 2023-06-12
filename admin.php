<?php
include("connectDB.php");
session_start();

if (!array_key_exists("username", $_SESSION)) {
    header("Location: login.php");
}

$title = "Welcome Admin";
include("parts/header.php");

?>
<a class="btn btn-success py-0" href="add.php">ADD</a>

<div class="d-flex flex-wrap">
    <?php
    $requete = $bdd->prepare("SELECT * from selection;");
    $requete->execute();
    $cars = $requete->fetchAll();

    foreach ($players as $player) { ?>

        <div class="card bg-dark p-2 my-2">

            <p><?php echo $player["name"] ?></p>
            <p><?php echo $player["age"] ?> €</p>
            <p><?php echo $player["position"] ?> €</p>

            <div class="d-flex justify-content-evenly">
                <a class="btn btn-warning py-0" href="update.php?id=<?php echo $player["id"] ?>">Update</a>
                <a class="btn btn-danger py-0" href="delete.php?id=<?php echo $player["id"] ?>">Delete</a>
            </div>
        </div>


    <?php } ?>


</div>



<?php
include("parts/footer.php");
