<?php
include("utils/connectDB.php");
$title = "Modifier les informations";
include("parts/header.php");

if(!isset($_GET["id"])){
    header('Location: admin.php');
}

$requete = $pdo->prepare("SELECT * from selection WHERE id = :id;");
$requete->execute([
    "id" => $_GET["id"]
]);

$player = $requete->fetch();

if(!$player){
    header('Location: admin.php');
}

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (empty($_POST["name"])) {
        $errors["username"] = 'Veuillez saisir un nom de joueur';
    }

    if (empty($_POST["age"])) {
        $errors["age"] = 'Veuillez saisir un age';
    }

    if (empty($_POST["poste"])) {
        $errors["age"] = 'Veuillez saisir un poste';
    }


    if (count($errors) == 0) {

        $requete = $pdo->prepare("UPDATE selection SET name = :name , poste = :poste, age = :age WHERE id = :id;");

        $requete->execute([
            "id" => $_GET["id"],
            "name" => $_POST["name"],
            "poste" => $_POST["poste"],
            "age" => $_POST["age"]
        ]);

        header('Location: admin.php');

    }

}
?>



<form method="POST" action="update.php?id=<?php echo $player["id"] ?>">

    <label>Name</label>
    <input type="text" name="name" value="<?php echo $player["name"] ?>">

    <label>Poste</label>
    <input type="text" name="poste" value="<?php echo $player["poste"] ?>">

    <label>Age</label>
    <input type="number" name="age" value="<?php echo $player["age"] ?>">

    <button>Valider</button>

    <?php
    //Affichage des erreurs
    if (count($errors) != 0) {
        echo (' <h4>Erreurs lors de la dernière soumission du formulaire : </h2>');
        foreach ($errors as $error) {
            echo ('<div class="text-danger">' . $error . '</div>');
        }
    }
    ?>
</form>