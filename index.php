<?php
$title = "Listes de la séléction";

require "utils/connectDB.php";
include("parts/header.php");
?>



    <div class="d-flex flex-wrap p-3">
        <?php
        $response = $bdd->query('SELECT * FROM selection ');
        $joueurs = $response->fetchAll();

        foreach ($joueurs as $joueur) {
            ?>
            <div class="col-3 p-2">
                <div class="card text-center">

                    <p><?php echo $joueur["name"] ?></p>
                    <p><?php echo $joueur["age"] ?> ans</p>
                    <p><?php echo $joueur["position"] ?></p>


                </div>
            </div>

            <?php
        }
        ?>
    </div>


