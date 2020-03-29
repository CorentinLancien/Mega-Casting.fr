<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/theme/views/front/contact.php';

$mail = 'corentinlancien35@gmail.com';

if(!empty($_POST['nom'])){

  if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))
  {
  	$passage_ligne = "\r\n";
  }
  else
  {
  	$passage_ligne = "\n";
  }


  $message_txt = $_POST['commentaire'];
  $expediteur = $_POST['email'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $sujet = 'Contact';
  $phone = $_POST['tel'];

  ini_set('SMTP','smtp.free.fr');
  ini_set("smpt_port", 	'587');
  ini_set($mail, $expediteur);
  $boundary = "-----=".md5(rand());



  $header = "From: \"$mail\"<$expediteur>".$passage_ligne;

  $header.= "Reply-to: \"Mega_Casting\" <$mail>".$passage_ligne;
  $header.= "MIME-Version: 1.0".$passage_ligne;

  $header.= "Content-Type: multipart/mixed ;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;

  $message = $message = $passage_ligne."--".$boundary.$passage_ligne;
  $message.= "Content-Type: text/plain; charset=\"UTF-8\"".$passage_ligne;
  $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
  $message .=$passage_ligne . "Mail envoyé par : " . $nom. $prenom.$passage_ligne.$passage_ligne;
  $message .= "Téléphone : " . $phone.$passage_ligne.$passage_ligne;
  $message.= "Message : ".$passage_ligne . $message_txt.$passage_ligne;


  mail($mail,$sujet,$message,$header);

}
