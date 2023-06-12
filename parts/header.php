<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title class="text-primary"><?php echo isset($title) ? $title : "Site de la Fédération Francaise de Foot" ?></title>
</head>
<body>
<div class="p-3 d-flex justify-content-space-evenly" id="navbarNav">

    <a class="col-2" href="index.php">FFF</a>

    <div class="d-flex justify-content-evenly col-8">
        <a class="" href="admin.php">ADMIN</a>
        <a class="" href="login.php">Login</a>
    </div>

</div>

<h1 class="text-light text-center my-3"><?php echo isset($title) ? $title : "Site de la Fédération Francais de Foot" ?></h1>


