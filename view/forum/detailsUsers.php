<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$user = $result["data"]['user'];
$posts = $result["data"]["posts"];

    
?>
<br>
<h1>Détails du membre <?=$user->getNickname()?></h1>
<br>
<?php
echo "Messages/Posts de ".$user->getNickname()." : ";

foreach($posts as $post){

    ?>
    <br>
    <br>
    <p>
        <?= $post->getMessage()?></a>
    </p>
    
    <?php
}

