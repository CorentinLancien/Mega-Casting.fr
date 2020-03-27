<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="/theme/ressources/css/style.css">
  <!-- Kit FontAwesome -->
  <script src="https://kit.fontawesome.com/e55fbb28a6.js" crossorigin="anonymous"></script>

  <!-- favio.ico -->
  <link rel="icon" href="../theme/ressources/img/menu/favicon.ico" />

  <title>MégaCasting 2019-2020</title>
</head>

<body>
  <?php
  //Chargement du menu
    include_once $_SERVER['DOCUMENT_ROOT'] . '/theme/views/structure/menu.php';

    //Chargement de la page en fonction de l'url attribuée .
    if(isset($_SERVER['REQUEST_URI'])){
      if($_SERVER['REQUEST_URI'] == '/'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/AccueilController.php';
      }

      else if($_SERVER['REQUEST_URI'] == '/?metier'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/MetierController.php';
      }

      else if($_SERVER['REQUEST_URI'] == '/?annonce'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/AnnonceController.php';
      }

      else if($_SERVER['REQUEST_URI'] == '/?conditions'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/ConditionsController.php';
      }

      else if($_SERVER['REQUEST_URI'] == '/?contact'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/ContactController.php';
      }

      else if($_SERVER['REQUEST_URI'] == '/?login'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/LoginController.php';
      }

      else if($_SERVER['REQUEST_URI'] == '/?qui'){
        include_once $_SERVER['DOCUMENT_ROOT'] . '/app/controller/QuiController.php';
      }
    }

    //Chargement du footer
    include_once $_SERVER['DOCUMENT_ROOT'] . '/theme/views/structure/footer.php';
  ?>
</body>
