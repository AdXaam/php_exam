<?php

function connectDB()
{
    $host = 'localhost';
    $dbName = 'players';
    $user = 'root';
    $password = '';

    return new PDO(
        'mysql:host=' . $host . ';dbname=' . $dbName . ';charset=utf8',
        $user,
        $password
    );
}

function configPDO(PDO $pdo)
{
    // Cette ligne demandera à pdo de renvoyer les erreurs SQL si il y en a
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    // Ne recuperer que les indices assoc
    $pdo->setAttribute(
        PDO::ATTR_DEFAULT_FETCH_MODE,
        PDO::FETCH_ASSOC
    );
}


?>
