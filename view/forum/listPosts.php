<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$posts = $result["data"]['posts'];
$topic = $result["data"]['topic'];
    
?>

<h1>Liste des posts/messages <?= $topic->getTitle() ?></h1>
<br>
<?php
        if($topic->getClosed() == 1) {
    ?>
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
    <?php
} ?>
</tbody>
</table>
<br>
<?php
if($topic->getClosed()==0){
?>
<form action="index.php?ctrl=forum&action=addPost&id=<?=$topic->getId() ?>" method="post">
   <input type="text" name ="message" />
   <td colspan="2"><input type="submit" name="submit" class="btn" value="Ajouter"></td>
</form>

