<?php


require_once 'db.php';



if(!empty($_POST['supprimerKebab']) && ctype_digit($_POST['supprimerKebab'])){



        $id = (int)$_POST['supprimerKebab'];

        $sql = "DELETE FROM kebabs WHERE id='$id'";

        $resultat = mysqli_query($maConnection,$sql);

        header("Location: index.php");






}






?>