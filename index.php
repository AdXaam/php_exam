<?php
include("utils/connectDB.php");
session_start();

$requete = $pdo->prepare("SELECT * from selection;");
$requete->execute();
$joueurs = $requete->fetchAll();

$title = "Joueurs de la selection";
include("parts/header.php");
?>

    <div class="d-flex flex-wrap ">
        <?php
        foreach ($joueurs as $joueur) {
            ?>
            <div class="col-3 p-2">
                <div class="card text-center">

                    <p><?php echo $joueur["name"] ?></p>
                    <p><?php echo $joueur["age"] ?> ans</p>
                    <p><?php echo $joueur["poste"] ?></p>

                </div>
            </div>
        <?php
        }
        ?>


    </div>




<?php
include("parts/footer.php")
?>
