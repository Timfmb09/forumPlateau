<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$topics = $result["data"]['topics'];
// var_dump($topics);
    
?>

<h1>Liste des topics</h1>

<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Date</th>
            <th>User</th>
        </tr>
    </thead>
    <tbody>
   
    <?php
    foreach($topics as $topic){ ?>
    <tr>
        <td><a href="index.php?ctrl=forum&action=findPostsByTopic&id=<?= $topic->getId() ?>"><?=$topic->getTitle()?></a></td>
        <td><?=$topic->getCreationDate()?></td>
        <td><?=$topic->getUser()?></td>
    </tr>
        <?php
    } ?>

</tbody>
</table>

    




  
