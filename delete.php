<?php
include("utils/connectDB.php");
$title = "Suppression du joueur";
include("parts/header.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $requete = $pdo->prepare("DELETE FROM selection WHERE id = :id");

    $requete->execute([
        "id" => $id,
    ]);

    header('Location: admin.php');
} else {
    echo "L'identifiant du joueur n'a pas été spécifié.";
}

include("parts/footer.php");
?>