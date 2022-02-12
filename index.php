
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
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
      <div class="container-fluid">
        <a class="navbar-brand p-3 bg-info text-white" href="/PhP/voyage">Voyages</a>
        
      </div>


      <?php 
      
      if ($isConnected) {?>


      <form method="post">
        
        <input type="submit" value="Deconnexion" name="deconnexion" class="btn btn-danger me-5"/>
      </form>





          <?php  } else {   ?>


      <form method="post" class="d-flex">
        <input type="text" name="user" placeholder="user" />
        <input type="password" name="password" placeholder="password" />
        <input type="submit" value="Connecter" class="btn btn-success me-5"/>
      </form>

      <?php  }   ?>



    </nav>

    
    
    <?php foreach ($voyages as  $voyage) { ?>
      
      
      <div
        style="background-image: linear-gradient(
     rgba(0, 0, 0, 0.45), 
     rgba(0, 0, 0, 0.45)
   ), url('img/<?= $voyage['image'] ?>');background-repeat:no-repeat;background-size:cover"
        class='destination row m-5 flex-direction-column align-items-center justify-content-center' >
        <h1 style='color: white'><?= $voyage['destination'] ?></h1>
        <h2 style='color: red'><?php if($isConnected){echo ($voyage['prix'] * 0.8);  } else {echo $voyage['prix']; } ?>€</h2>
        <h3 style='color: white'><?= $voyage['duree'] ?> Jours</h3>
        <h3 style='color: white'>Pour <?= $voyage['personnes'] ?> voyageurs</h3>
        <a class='btn btn-secondary' href='voyage.php?destination=<?= $voyage['destination'] ?>'>Lien vers l'article</a>
      </div>


   <?php }  ?>
    
    
    
    
    
   




  </body>
</html>
