<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$users = $result["data"]['users'];


    
?>
<br>
<h1>Liste des membres</h1>
<br>
<?php
foreach($users as $user ){

    ?>
    <p><?php echo $user->getId()?>
        <a href="index.php?ctrl=forum&action=findPostsByUser&id=<?=$user->getId() ?>"> <?= $user->getNickname()?></a>
    </p>
    
    <?php
}

