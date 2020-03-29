<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/app/controller/models/utils/form.php';

  function displayAnnonce(){
    $bdd = NewDB();

    $query = "SELECT * FROM Offer
    INNER JOIN Job on Offer.Identifiant_Job = Job.Identifiant
    INNER JOIN ContractType on Offer.Identiiant_ContractType = ContractType.Identifiant";

    $items = $bdd->query($query);

    foreach ($items as $item) {
              echo '    <div class="imagesbis">
                  <img class="images2" src="/theme/ressources/img/pages/annonces/' . $item['Image'] .'">
                  </div>
                  <div class="text1">
                    <div class="titrebis">' . $item['Titre'] . '!</div>
                  <div class="desc">
                    <p>Description : </p>
                    </div>
                    <p>' . $item['Description'] . '</p>
                      <p class="date_debut">Cette offre est prévue pour le : ' . $item['Date_Debut_Poste'] .'</p>
                        <p class="JobType">Type de metier : ' . $item['Name'] .'</p>
                        <p class="JobType">Type de contrat : ' . $item['Nom'] .'</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pdf">
                    <a href="?InformationsSupplementaires&idProducer='. $item['Identifiant_Producer'].'">Informations du producteur</a>
                    </div>

                    <div class="borderChiant"></div>';
    }
  }
