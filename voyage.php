
<?php

require_once "logique.php"
?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Voyages</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/PhP/voyage/">Voyages</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>


      <?php 
      
      if ($isConnected) {?>


<form method="post">
        
        <input type="submit" value="Deconnexion" name="deconnexion"/>
      </form>





          <?php  } else {   ?>


      <form method="post">
        <input type="text" name="user" placeholder="user" />
        <input type="password" name="password" placeholder="password" />
        <input type="submit" value="Connecter" />
      </form>

      <?php  }   ?>



    </nav>

    
    
    <?php  

        $voyage;

        if(isset($_GET['destination'])){


            foreach ($voyages as  $unVoyage) {
                
                if($unVoyage['destination'] == $_GET['destination']){

                    $voyage = $unVoyage;
                }



            }
        }
    
   
      ?>
      
      <div
        style="background-image: url('img/<?= $voyage['image'] ?>')"
        class='destination row m-5 flex-direction-column align-items-center justify-content-center' >
        <h1 style='color: white'><?= $voyage['destination'] ?></h1>
        <h2 style='color: red'><?php if($isConnected){echo ($voyage['prix'] * 0.8);  } else {echo $voyage['prix']; } ?>€</h2>
        <h3 style='color: white'><?= $voyage['duree'] ?> Jours</h3>
        <h3 style='color: white'>Pour <?= $voyage['personnes'] ?> voyageurs</h3>
      </div>

      
   
    
    
    
    
    
   




  </body>
</html>
