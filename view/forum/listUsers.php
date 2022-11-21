<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$users = $result["data"]['users'];

    
?>
<br>
<h1>Voir la liste des gens</h1>
<br>
<?php
foreach($users as $user ){

    ?>
    <p><?php echo $user->getId()?>
        <a href="index.php?ctrl=forum&action=findOneByUser&id=<?=$user->getId() ?>"> <?= $user->getNickname()?> </a>
    </p>
    
    <?php
}

