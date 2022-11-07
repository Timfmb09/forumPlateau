<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$users = $result["data"]['users'];
    
?>

<h1>liste users</h1>

<?php
foreach($users as $user ){

    ?>
    <p><?=$user->getNickname()?></p>
    <?php
}