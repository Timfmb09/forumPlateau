<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$categorys = $result["data"]['categorys'];
    
?>

<h1>Liste des categories</h1>

<?php
foreach($categorys as $category ){

    ?>
    <p><?php echo $category->getId()?>
        <a href="index.php?ctrl=forum&action=findTopicsByCategory&id=<?=$category->getId() ?>"> <?= $category->getCategoryName()?> </a>
    </p>
    
    <?php
}

