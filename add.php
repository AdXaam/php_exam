<?php
$title = "Ajouter un joueur";
require "utils/connectDB.php";
include("parts/header.php");

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (empty($_POST["name"])) {
        $errors["username"] = 'Veuillez saisir un nom';
    }

    if (empty($_POST["age"])) {
        $errors["price"] = 'Veuillez saisir un age';
    }

    if (empty($_POST["poste"])) {
        $errors["price"] = 'Veuillez saisir un poste';
    }


    if (count($errors) == 0) {

        $requete = $pdo->prepare("INSERT INTO selection(name, poste, age) VALUES(:name,:poste,:age);");

        $requete->execute([
            "name" => $_POST["name"],
            "poste" => $_POST["poste"],
            "age" => $_POST["age"],

        ]);

        header('Location: admin.php');

    }

}
?>



    <form method="POST" action="add.php">
        <label>Name</label>
        <input type="text" name="name">
        <label>Age</label>
        <input type="number" min="0" name="age">
        <label>Poste</label>
        <input type="text" name="poste">
        <button>Valider</button>
    </form><?php
