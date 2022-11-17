<html>
   <br>
   <head>
      <meta name="viewport" content="width=device-width" />
      <h1 class="text-center">Déonnexion</h1>
   </head>
   <br>
   <body>
      <form class="form-horizontal" method="post" action="index.php?ctrl=home&action=home">
         <div class="form-group">
            <div class="col-md-4 col-md-offset-4">
               <input id="nickname" name="nickname" type="text" placeholder="Votre identifiant" class="form-control input-md" required>
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
               <button type="submit" name='logout' class="btn btn-primary">Déconnexion</button>
            </div>
         </div>                
      </form>
   </body>
</html>