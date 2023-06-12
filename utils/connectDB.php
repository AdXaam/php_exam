<?php
include("utils/function.php");

try {

    $pdo = connectDB();

    configPDO($pdo);

}
    // $e permet de recuperer l'erreur qui à déclencher le catch
catch (Exception $e) {

    echo('Erreur connexion à la base de données : '.$e->getMessage());

    exit;
}




?>
<?php
