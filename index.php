<?php

include 'filterQuizs.php';
include 'quizs.php';

if (isset($_GET['query']) && !empty($_GET['query'])){
    $quizs = filterQuizs($_POST['query']);
    $status = 'filtered';
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

                    <form class="search-quiz col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" action="index.php" method="get">
                        <input type="text" class="form-control form-control-dark" id="input" placeholder="Rechercher un quiz" aria-label="Search" name="query">
                        <input type="submit" class="btn btn-outline-light me-2" value="Rechercher">
                    </form>

                    <div class="text-end">
                        <a href="#" class="btn btn-outline-light me-2">Login</a>
                        <a href="#" class="btn btn-warning">Sign-up</a>
                    </div>
                </div>
            </div>
        </header>


    <section class="container list">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <?php if(count($quizs) != 0) {
                        $j = array_key_first($quizs);

                        foreach($quizs[$j] as $key => $value){ ?>
                            <td>
                                <h2><?= $key ?></h2>
                            </td>
                        <?php }
                    } ?>
                </tr>
            </thead>
            <tbody id="content">
                <?php if(count($quizs) == 0){ ?>

                    <p class='no-result'>Pas de Quizs trouvés</p>

                <?php } elseif(count($quizs) != 0){

                    $keys = array_keys($quizs);
                    foreach($keys as $key) { ?>
                        <tr>
                            <td>
                                <p class='list-text'><a href='view.php?id=<?= $key ?>'><?= $quizs[$key]['Title'] ?></a></p>
                            </td>
                            <td>
                                <img src='img/<?= $key ?>.jpg' class='quiz list-img'>
                            </td>
                            <td>
                                <p class='list-text'><a><?= $quizs[$key]['Author'] ?></a></p>
                            </td>
                            <td>
                                <p class='list-text'> <?= count($quizs[$key]['Questions']) ?></p>
                            </td>
                        </tr>
                    <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </section>
    <section class="container view">

    </section>
    <footer class="bg-dark">
        <p class="copyright">&copy; EPFC &dot; 2022, Made with <strong>❤</strong> by <a class="mail" href="mailto:cdujardin4000@gmail.com">cdujardin4000</a></p>
        <a href="https://quiditvrai.com/conditions-dutilisation/">Condition d'utilisation</a>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>

