<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$categorys = $result["data"]['categorys'];
    
?>

<h1>Liste des categories</h1>

<?php
foreach($categorys as $category ){

    ?>
    <p><?=$category->getId()?></p>
    <p><?=$category->getCategoryname()?></p>
    <?php
}
