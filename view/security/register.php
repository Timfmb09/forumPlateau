<h1 class="text-center">Ajouter un utilisateur</h1>
<br>
<div class="container">
      <?php
      if($success == 'true' && $success == 'true'){ // On affiche la réussite si tout fonctionne
        echo '<div class="alert alert-success" role="alert"> L\'utilisateur est bien créer ! </div>';
      }
      if($showErrors){
        echo implode('<br>', $errors);
      }
      ?>
      <form method="post" class="pure-form pure-form-aligned">
         <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Pseudonyme</span>
            <input type="text" class="form-control" name="nickname" placeholder="Votre pseudonyme" aria-describedby="basic-addon1">
         </div>
         <br>
         <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Password</span>
            <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" aria-describedby="basic-addon1">
         </div>
         <br>
      <br>
      <input type="submit" class="btn btn-success" value="S'inscrire">
      </form>
      
</div>