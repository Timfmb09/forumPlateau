<h1 class="text-center">Ajouter un utilisateur</h1>
<h2 class="text-center alert alert-danger"><a href="">Retour au site</a></h2>
<br>
<div class="container">

      <form method="post" class="pure-form pure-form-aligned" action='index.php?ctrl=security&action=addUser'>
         <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Nickname</span>
            <input type="text" class="form-control" name="nickname" placeholder="Votre pseudonyme" aria-describedby="basic-addon1">
         </div>
         <br>
         <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">Email</span>
            <input type="text" class="form-control" name="email" placeholder="Votre email" aria-describedby="basic-addon1">
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