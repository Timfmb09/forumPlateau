<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$posts = $result["data"]['posts'];
    
?>

<h1>liste posts</h1>

<?php
foreach($posts as $post ){

    ?>
    <p><?php echo $post->getMessage()?>
        <?php echo $post->getUser(). "(".$post->getDatepost().") wrote : ".$post->$getMessage()?>
    </p>
    <?php
}