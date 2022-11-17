<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$posts = $result["data"]['posts'];
$topic = $result["data"]['topic'];
    
?>
<br>
<h1>Liste des posts/messages <?= $topic->getTitle() ?></h1>


<table>
    <thead>
        <tr>
            <th>Message</th>
            <th>Date</th>
            <th>User</th>
        </tr>
    </thead>
    <tbody>
    <br>
    <?php
        foreach($posts as $post){
    ?>
        <tr>
            <td><?=$post->getMessage()?></td>
            <td><?=$post->getDatePost()?></td>
            <td><?=$post->getUser()?></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
   <?php  
   if($topic->getClosed() == 1) {
        echo "<h3>Topic fermé</h3>";
   } elseif($topic->getClosed() == 0){
    ?>
    <br>
        <form action="index.php?ctrl=forum&action=addPost&id=<?=$topic->getId() ?>" method="post">
        <input type="text" name ="message" />
        <td colspan="2"><input type="submit" name="submit" class="btn" value="Ajouter"></td>
        </form>
   <?php
   }
   ?>


