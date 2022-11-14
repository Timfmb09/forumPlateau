<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$posts = $result["data"]['posts'];
$idtopic = $result["data"]['idtopic'];
    
?>

<h1>Liste des posts/messages</h1>

<table>
    <thead>
        <tr>
            <th>Message</th>
            <th>Date</th>
            <th>User</th>
        </tr>
    </thead>
    <tbody>

    <?php
foreach($posts as $post ){

    ?>
<tr>
    <td><?=$post->getMessage()?></td>
    <td><?=$post->getDatePost()?></td>
    <td><?=$post->getUser()?></td>
</tr>
    <?php
} ?>
</tbody>
</table>
<form action="index.php?ctrl=forum&action=addPost&id=<?=$idtopic ?>" method="post">
   <input type="text" name ="message" />
   <td colspan="2"><input type="submit" name="submit" class="btn" value="Ajouter"></td>
</form>