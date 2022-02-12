
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
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Flo Kebab</a>
        <a class="btn btn-success" href="createKebab.php">CREER UN KEBAB</a>
      </div>

      
    </nav>

    <div class="container">
      <div class="d-flex justify-content-center">
        <img style="width: 500px" src="kebab.jpeg" alt="" />
      </div>

      <?php foreach ($kebabs as $kebab) {  ?>

       

          <div>
            <hr>
                <p>Kebab a la viande de : <?php if($kebab['viande'] == 1) { echo 'veau' ;} else if ($kebab['viande'] == 2) {echo 'dinde';} else if($kebab['viande'] == 3) {echo 'agneau';}  ?></p>
                <p>Garniture : <?= $kebab['garniture']   ?></p>
                <p>Sauce : <?php if($kebab['sauce'] == 1) { echo 'blanche' ;} else if ($kebab['sauce'] == 2) {echo 'mayonnaise';} else if($kebab['sauce'] == 3) {echo 'algerienne';}   ?></p>
                
                
                <div class="d-flex">
                        <p class="m-0">difficulte de la préparation : </p>
                
                        <div class="row ms-3 align-items-center">
                              <?php for($i=0; $i<3; $i++){ ?>
                                  <div class="cercle<?php if($kebab['difficulte']>$i ){echo " plein";} ?>"></div>
                              <?php }?>
                        </div>

                </div> 
                
                    <form action="unKebab.php">

                      <button class="btn btn-warning mt-3"type="submit" name="id" value="<?= $kebab['id'] ?>">VOIR CE KEBAB</button>

                    </form>
                <hr>
          </div>

      
      <?php  }  ?>




    </div>
  </body>
</html>
