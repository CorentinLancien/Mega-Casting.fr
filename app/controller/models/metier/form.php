<?php

include_once $_SERVER["DOCUMENT_ROOT"] . '/app/controller/models/utils/form.php';

  function displayJobs(){
    $bdd = NewDB();

    $query = "SELECT * FROM Job
    INNER JOIN JobType on Job.Identifiant_JobType = JobType.Identifiant";

    $items = $bdd->query($query);

    foreach ($items as $item) {
              echo '<div class="JobContent">
                <div class="backgroundImage">
                  <div class="imageGallerie imageGallerie2">
                    <img class="imageGallerie" src="/theme/ressources/img/pages/jobs/' . $item['ImageJob']. '" alt="">
                    <div class="texteGallerie premierTexteImage1">
                      <h3>' . $item['Name']. '</h3>
                    </div>
                    <div class="texteGallerie deuxiemeTexteimage1">
                      ' . $item['Nom']. '
                    </div>
                  </div>
                </div>
              </div>';
    }
  }
