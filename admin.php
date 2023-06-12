<?php
include("utils/connectDB.php");
session_start();

if (!array_key_exists("username", $_SESSION)) {
    header("Location: login.php");
}

$title = "Welcome Admin";
include("parts/header.php");

?>
    <a class="btn btn-success py-0" href="add.php">Ajouter un joueur</a>

    <div class="d-flex justify-content-center flex-wrap">
        <?php
        $requete = $pdo->prepare("SELECT * from selection;");
        $requete->execute();
        $joueurs = $requete->fetchAll();

        foreach ($joueurs as $joueur) { ?>

            <div class="card col-3 m-3   text-center">

                <p><?php echo $joueur["name"] ?></p>
                <p><?php echo $joueur["age"] ?> ans</p>
                <p><?php echo $joueur["poste"]?></p>
                <div class="d-flex justify-content-evenly">
                    <a class="btn btn-warning py-0" href="update.php?id=<?php echo $joueur["id"] ?>">Modifier</a>
                    <a class="btn btn-danger py-0" href="delete.php?id=<?php echo $joueur["id"] ?>">Supprimer</a>
                </div>
            </div>

        <?php } ?>
    </div>

<?php
include("parts/footer.php");
