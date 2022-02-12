
<?php   


require_once 'logique.php';


?>










<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://bootswatch.com/5/solar/bootstrap.min.css"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Flo Kebab</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarColor01"
          aria-controls="navbarColor01"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="container">
      <div class="d-flex justify-content-center">
        <img style="width: 500px" src="kebab.jpeg" alt="" />
      </div>

      

       

          <div>
            <hr>
                <p>Kebab a la viande de : <?php if($kebab['viande'] == 1) { echo 'veau' ;} else if ($kebab['viande'] == 2) {echo 'dinde';} else if($kebab['viande'] == 3) {echo 'agneau';}  ?></p>
                <p>Garniture : <?= $kebab['garniture']   ?></p>
                <p>Sauce : <?php if($kebab['sauce'] == 1) { echo 'blanche' ;} else if ($kebab['sauce'] == 2) {echo 'mayonnaise';} else if($kebab['sauce'] == 3) {echo 'algerienne';}   ?></p>
                <p>difficulte de la préparation : <?php if($kebab['difficulte'] == 1) { echo '1/3' ;} else if ($kebab['difficulte'] == 2) {echo '2/3';} else if($kebab['difficulte'] == 3) {echo '3/3';}   ?></p>
                <a href="createKebab.php?id=<?= $kebab['id'] ?>&edition" class="btn btn-warning">MODIFIER</a>
                 
                <form action="deleteKebab.php" method="post">


                          <button class="btn btn-danger mt-4" name="supprimerKebab" value="<?= $kebab['id'] ?>" type="submit" >SUPPRIMER</button>


                </form>



                <hr>
          </div>

      
      




    </div>
  </body>
</html>
