<html>
   <br>
   <head>
      <h1 class="text-center">Ajouter un utilisateur</h1>
   </head>  
   <br>
   <body>   
      <div class="container">
         <form method="post" class="pure-form pure-form-aligned" action='index.php?ctrl=security&action=register'>
      </div>
      <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Nickname</span>
         <input type="text" class="form-control" name="nickname" placeholder="Votre pseudonyme" aria-describedby="basic-addon1" class="form-control input-md" required>
      </div>
      <br>
      <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Email</span>
         <input type="text" class="form-control" name="email" placeholder="Votre email" aria-describedby="basic-addon1" class="form-control input-md" required>
      </div>
      <br>
      <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Password</span>
         <input type="password" class="form-control" name="password" placeholder="Votre mot de passe" aria-describedby="basic-addon1" class="form-control input-md" required>
      </div>
      <br>
      <br>
      <div class="input-group">
         <span class="input-group-addon" id="basic-addon1">Confirmation du password</span>
         <input type="password" class="form-control" name="password2" placeholder="Confirmer votre password" aria-describedby="basic-addon1" class="form-control input-md" required>
      </div>
      <br>
      <div>
         <input type="submit" class="btn btn-success" value="S'inscrire">
      </div>
      <br>
      <div>
         <button class="text-center alert alert-danger"><a href="">Réessayer</a></h3></button>
      </div>
      </form>  
   </body>
</html>