<?php   

require_once 'db.php';


$viandes = ["veau","dinde","agneau"];
$sauces = ["blanche","mayonnaise","algerienne"];
$difficultes = ["1/3","2/3","3/3"];




if(isset($_GET['id']) && !empty($_GET['id']) && is_numeric($_GET['id'])){

        // $id = htmlspecialchars($_POST['id']);

    $id = htmlspecialchars($_GET['id']);
    
    $requeteUnKebab = "SELECT kebabs.id, kebabs.viande, kebabs.garniture, kebabs.sauce, kebabs.difficulte FROM kebabs WHERE id = '$id'";
    
    $resultat = mysqli_query($maConnection, $requeteUnKebab);

    $kebab = $resultat ->fetch_assoc();


} else {

    $maRequete = "SELECT * FROM kebabs";
    
    $kebabs = mysqli_query($maConnection, $maRequete);

}



?>