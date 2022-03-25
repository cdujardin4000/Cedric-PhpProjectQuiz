<?php
$statusMessage = "Veuillez choisir le nouveau logo";
if(!empty($_FILES['logo'])){
    if($_FILES['logo']['error'] == 0){
        if($_FILES['logo']['size'] < 300000 && $_FILES['logo']['type'] == 'image/png'){

            //Renomme l'ancien fichier en old
            //rename('\img\quiz-logo.png', '\img\quiz-logo-old.png');
            //Renomme le nouveau fichier
            $_FILES['logo']['name'] = "quiz-logo.png";
            $source = $_FILES['logo']['tmp_name'];
            $destination = getcwd() . '\img\\' . $_FILES['logo']['name'];

            if(move_uploaded_file($source, $destination)){
                $statusMessage = "Le fichier est valide, nous l'affichons tout de suite,  merci";
                header("Refresh:5");
            } else {
                $statusMessage = "Erreur : fichier invalide (max-size: 300ko, format: png)";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project1PHP: Quiz</title>
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/screen.css" type="text/css">
</head>
<body>
    <section class="header ">
        <header class="p-3 bg-dark text-white">
            <div class="container">
                <h1 class="justify-content-center">Projet PHP n°1: QUIZ</h1>
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src ="img/quiz-logo.png" alt="logo du header" title="LOGO" class="logo-header">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="index.php" class="nav-link px-2 text-secondary">Home</a></li>
                        <li><a href="admin.php" class="nav-link px-2 text-white">Admin</a></li>
                    </ul>

                    <form class="search-quiz col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="index.php" method="post">
                        <input type="text" class="form-control form-control-dark" id="input" placeholder="Rechercher un quiz" aria-label="Search" name="query">
                        <input type="submit" class="btn btn-outline-light me-2" value="Rechercher">
                    </form>

                    <div class="text-end">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                        <button type="button" class="btn btn-warning">Sign-up</button>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <section class="container form mb-3">
        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="admin.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="300000"/>
            <label class="form-label statusMessage"><?= $statusMessage ?></label>
            <input type="file" class="form-control form-control-dark" name="logo">
            <input type="submit" class="btn btn-warning change-logo" value="Valider">
        </form>
    </section>
    <footer class="bg-dark">
        <p class="copyright">&copy; EPFC &dot; 2022, Made with <strong>❤</strong> by <a class="mail" href="mailto:cdujardin4000@gmail.com">cdujardin4000</a></p>
        <a href="https://quiditvrai.com/conditions-dutilisation/">Condition d'utilisation</a>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>

