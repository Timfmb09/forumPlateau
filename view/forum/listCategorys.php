<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$categorys = $result["data"]['categorys'];
    
?>

<h1>Liste des categories</h1>

<?php
foreach($categorys as $category ){

    ?>
    <p><?php echo $category->getId()?>
        <?php echo $category->getCategoryname()?>
        <a href="index.php?ctrl=forum&action=findTopicsByCategory&id=<?=$category->getId() ?>"> Nom de la catégorie </a>
    </p>
    
    <?php
}

