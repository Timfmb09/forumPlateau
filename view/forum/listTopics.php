<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$topics = $result["data"]['topics'];
$idcategory = $result["data"]['id_category'];

// var_dump($topics);die;
    
?>
<br>
<h1>Liste des topics/Sujets</h1>
<br>
<table>
    <thead>
        <tr>
            <th>Title</th>          
            <th>Date</th>
            <th>User</th>
            <th>Verrouiller/déverouiller</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($topics as $topic){ 
    ?>
    <tr>
        <td><a href="index.php?ctrl=forum&action=findPostsByTopic&id=<?= $topic->getId() ?>"><?=$topic->getTitle()?></a></td>
        <td><?=$topic->getCreationDate()?></td>      
        <td><?=$topic->getUser() ?></td>
        <td><?=$topic->getClosed() ?></td>
    </tr>
        <?php
    } ?>
</tbody>
</table>
<br>
<form action="index.php?ctrl=forum&action=addTopic&id=<?=$idcategory ?>" method="post">
   <input type="text" name ="title" />
   <td colspan="2"><input type="submit" name="submit" class="btn" value="Ajouter"></td>
</form>
    




  
