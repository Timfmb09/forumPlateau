<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$topics = $result["data"]['topics'];
    
?>

<h1>Liste des topics</h1>

<?php
foreach($topics as $topic ){

    ?>
    <p><?=$topic->getTitle()?></p>
    <p><?=$topic->getCreationdate()?></p>
    <p><?=$topic->getId()?></p>
    <?php
}


  
