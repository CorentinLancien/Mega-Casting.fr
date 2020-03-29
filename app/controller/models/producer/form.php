<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/app/controller/models/utils/form.php';

  function displayProducer(){
    $bdd = NewDB();
    $idProducer = $_GET['idProducer'];
    $query = "SELECT * FROM Producer
    where Identifiant = $idProducer";

    $items = $bdd->query($query);

    foreach ($items as $item) {
              echo ' <div class="enteteProducer">
                        <div class="title">
                        <h1>'. $item['Libelle_Entreprise']. '</h1>
              ';
              if($item['JetonVerifie'] == 1){
                echo ' <div class="isVerified">
                          Ce producteur est un producteur vérifié par notre entreprise
                        </div>  ';
              }
              else{
                echo ' <div class="isVerified">
                          Ce producteur nest pas un producteur vérifié par notre entreprise
                        </div>  ';
              }
              echo '  </div>
                <div class="contact">
                  <h3>Contact</h3>
                  <div class="phoneProducer"> <span>Téléphone : </span>' . $item['Phone']. '</div>
                  <div class="Adress"> <span>Adresse : </span>' . $item['Adresse']. '</div>
                </div>
              </div>
              <div class="descriptionProducer">
              <h3>Description</h3>
                '. $item['Description'].'
              </div>';
    }
  }
