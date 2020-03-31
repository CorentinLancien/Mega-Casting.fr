<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/app/controller/models/utils/form.php';



$message = "";
$trouver = 0;

if(isset($_POST['Login'])){
  $username = $_POST['username'];
  $motdepasse = $_POST['password'];
  $bdd = NewDB();

  //On test si la personne qui essaye de se connecter est un producteur .
  $query = "SELECT * FROM Producer";
  $items = $bdd->query($query);

  foreach ($items as $item) {
    if($item['Username_Producer'] == $username && $trouver == 0){
      if($item['MotDePasse_Producer'] == $motdepasse){
        $_SESSION['LoginType'] = 'producer';
        $_SESSION['idProducer'] = $item['Identifiant'];
        $message = '<div class="messageLogin">La connexion à réussie avec succès !</div>';
        $trouver = 1;
      }
      else if($trouver == 0){
        $message = '<div class="messageLogin">Le mot de passe est introuvable pour le nom de producteur : ' . $item["Username_Producer"] .'</div>';
        $trouver = 1;
      }
    }
    else if($trouver == 0){
      $message = "-1";
    }
  }
  //On test si c'est un utilisateur
  $sortie = 0;
  if($message == "-1"){
    $query = "SELECT * FROM Customer";
    $items = $bdd->query($query);
    foreach ($items as $item) {
      if($item['Username_Customer'] == $username && $trouver == 0){
        if($item['MotDePasse_Customer'] == $motdepasse){
          $_SESSION['LoginType'] = 'customer';
          $_SESSION['idCustomer'] = $item['Identifiant'];
          $message = '<div class="messageLogin">La connexion à réussie avec succès !</div>';
          $trouver = 1;
        }
        else{
          $message = '<div class="messageLogin">Le mot de passe est introuvable pour le nom d utilisateur : ' . $item["Username_Customer"] .'</div>';
          $trouver = 1;
        }
      }
      else if($trouver == 0){
        $message = "-1";
      }
    }
  }
  //On test si c'est un partenaire de diffusion .
  $trouver = 0;
  if($message == "-1"){
    $query = "SELECT * FROM Partner";
    $items = $bdd->query($query);

    foreach ($items as $item) {
      if($item['Username_Partner'] == $username && $trouver == 0){
        if($item['MotDePasse_Partner'] == $motdepasse){
          $_SESSION['LoginType'] = 'partner';
          $_SESSION['idPartner'] = $item['Identifiant'];
          $message = '<div class="messageLogin">La connexion à réussie avec succès !</div>';
          $trouver = 1;
        }
        else{
          $message = '<div class="messageLogin">Le mot de passe est introuvable pour le nom de partenaire : ' . $item["Username_Partner"] .'</div>';
          $trouver = 1;
        }
      }
      else if($trouver == 0){
        $message = '<div class="messageLogin">Le username ne correspond à aucun enregistrement, veuillez recommencer .</div>';
      }
    }
  }
}

function displayMessage($message){
  if($message != ""){
    echo $message;
  }
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/theme/views/front/login.php';
