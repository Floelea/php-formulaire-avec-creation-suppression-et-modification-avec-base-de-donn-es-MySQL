

<?php   


require_once 'db.php';

$modeEdition = false;

if(!empty($_GET['id']) && ctype_digit($_GET['id']) && isset($_GET['edition'])){


    require_once 'logique.php';

    $modeEdition = true;


}


if(
        !empty($_POST['choixViande']) && ctype_digit($_POST['choixViande'])
        && !empty($_POST['choixGarniture'])
        && !empty($_POST['choixSauce']) && ctype_digit($_POST['choixSauce'])
        && !empty($_POST['choixDifficulte']) && ctype_digit($_POST['choixDifficulte'])
){

        $viande = (int)$_POST['choixViande'];
        $garniture = $_POST['choixGarniture'];
        $sauce = (int)$_POST['choixSauce'];
        $difficulte = (int)$_POST['choixDifficulte'];

        $sql = "INSERT into kebabs (viande, garniture, sauce, difficulte) VALUES ('$viande','$garniture','$sauce','$difficulte')";

        $resultat = mysqli_query($maConnection,$sql);

        $id = $maConnection->insert_id;

        header("Location: unKebab.php?id=$id");


}



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
    <nav class="navbar navbar-dark bg-primary">
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



      <form action="<?php if($modeEdition) { echo'editKebab.php';} ;?>" method="post">

        <div class="form-group">
            <label for="exampleSelect2" class="form-label mt-4">Choisissez une viande</label>
            <select name="choixViande" class="form-select" id="">
            
                <?php   if($modeEdition){      ?>

                    <option value="<?= $kebab['viande']  ?>"><?= $viandes[$kebab['viande']-1]  ?></option>

                  <?php   }  else {   ?>


                    <option>Choisissez une viande</option>

                  <?php   }   ?>



                <option value="1">Veau</option>
                <option value="2">Dinde</option>
                <option value="3">Agneau</option>

                

            </select>
        </div> 



        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Choisissez une garniture</label>
            <textarea name="choixGarniture" value="" class="form-control" id="" rows="3"><?php if($modeEdition){ echo $kebab['garniture'] ;} ?></textarea>
        </div>

         
        <div class="form-group">
            <label for="exampleSelect2" class="form-label mt-4">Choisissez une sauce</label>
            <select name="choixSauce" class="form-select" id="">

              <?php   if($modeEdition){      ?>

                    <option value="<?= $kebab['sauce']  ?>"><?= $sauces[$kebab['sauce']-1]  ?></option>

              <?php   }  else {   ?>

                  <option >Choisissez une sauce</option>
                <?php   }   ?>

                <option value="1">Blanche</option>
                <option value="2">Mayonnaise</option>
                <option value="3">Algerienne</option>

                

            </select>
        </div>
        

        <div class="form-group">
            <label for="exampleSelect2" class="form-label mt-4">Niveau de difficultée</label>
            <select name="choixDifficulte" class="form-select" id="">


            <?php   if($modeEdition){      ?>

                    <option value="<?= $kebab['difficulte'] ?>"><?= $difficultes[$kebab['difficulte']-1]    ?></option>

            <?php   }  else {   ?>

              <option >Niveau de difficultées</option>


            <?php   }   ?>


                <option value="1">Facile</option>
                <option value="2">Moyen</option>
                <option value="3">Difficile</option>



                
            </select>
        </div>

        <div class="form-group mt-4">
            <button class="btn btn-lg btn-primary" name="id" value="<?= $kebab['id'] ;?>" type="submit"><?php if($modeEdition){ echo'VALIDER';} else {echo'CREER';}; ?></button>
        </div>

             
      </form>
    </div>
  </body>
</html>
