<html>
   <br>
   <head>
      <meta name="viewport" content="width=device-width" />
      <h1 class="text-center">Connexion</h1>
   </head>
   <br>
   <body>
      <form class="form-horizontal" method="post" action="index.php?ctrl=security&action=login">
         <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
               <input id="email" name="email" type="text" placeholder="Votre email" class="form-control input-md" required>
            </div>
         </div>
         <br>
         <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
               <input id="password" name="password" type="password" placeholder="Votre password" class="form-control input-md" required>
            </div>
         </div>
         <br>
         <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
               <button type="submit" name='connect' class="btn btn-primary">Je me connecte</button>
            </div>
         </div>
         <br>
         <div>
            <button class="text-center alert alert-danger"><a href="">Réessayer</a></h3></button>
         </div>
      </form>
   </body>
</html>