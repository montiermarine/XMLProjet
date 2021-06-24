<?php
// on cree une boucle pour afficher la page.
$test = simplexml_load_file('source.xml');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/journal/bootstrap.min.css" integrity="undefined" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/img/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto&display=swap" rel="stylesheet" />
    <title>Entreprise OCORDO</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Menu</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarColor01">
                            <ul class="navbar-nav me-auto">
                            <?php 
                            foreach ($test as $t) {
                                ?>
                                <li class="nav-item">
                                <a class="nav-link active" href="projet.php?id=<?= $t['id']?>"> <?= $t->menu ?></a>
                            </li>
                            <?php
                            }
                            ?>
                </nav>
                <div class="row">
                <div class="col-12 bg-light mt-4">
                <?php 
                 echo $test->page[$_GET['id']-1]->content ; 
                ?>
                </div>
                
                </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>