<?php    

require_once 'db.php';

if(!empty($_POST['choixViande']) && ctype_digit($_POST['choixViande'])
&& !empty($_POST['choixGarniture'])
&& !empty($_POST['choixSauce']) && ctype_digit($_POST['choixSauce'])
&& !empty($_POST['choixDifficulte']) && ctype_digit($_POST['choixDifficulte'])
&& !empty($_POST['id']) && ctype_digit($_POST['id'])){

    var_dump($_POST);
    
    $viande = (int)$_POST['choixViande'];
    $garniture = htmlspecialchars($_POST['choixGarniture']);
    $sauce = (int)$_POST['choixSauce'];
    $difficulte = (int)$_POST['choixDifficulte'];
    $id = (int)$_POST['id'];

    $sql = "UPDATE kebabs SET `viande`='$viande',`garniture`='$garniture',`sauce`='$sauce',`difficulte`='$difficulte' WHERE id='$id' ";

    $resultat = mysqli_query($maConnection,$sql);

    

    header("Location: unKebab.php?id=$id");







}











?>