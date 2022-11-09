<?php
// montre comment récupérer les données envoyées par le controller (ligne 3)
$posts = $result["data"]['posts'];
    
?>

<h1>liste posts</h1>

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
foreach($posts as $post){ ?>
<tr>
    <td><?=$post->getMessage()?></td>
    <td><?=$post->getDatePost()?></td>
    <td><?=$post->getUser()?></td>
</tr>
    <?php
} ?>

</tbody>
</table>
