<?php 
    include_once("connectDatabaseRecipes.php");
    $req=$db->prepare("SELECT * FROM sugar WHERE id=? limmit 1");
    $req->setFetchMode(PDO::FETCH_ASSOC);
    $req->execute(array($_GET["id"]));
    $tab=$req->fetchAll();
    echo $tab[0]["pictureRecipe"];
    
?>