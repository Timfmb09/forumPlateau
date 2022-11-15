<html>
<head>
    <meta name="viewport" content="width=device-width" />
<h1 class="text-center">Login page administration</h1>
<h2 class="text-center alert alert-danger"><a href="">Si vous n'êtes pas membre de l'administration, merci de retourner sur le site</a></h2>
</head>
<body>
<form class="form-horizontal" method="post" action="index.php?ctrl=security&action=addUser">
   <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
         <input id="nickname" name="nickname" type="text" placeholder="Votre nom" class="form-control input-md" required>
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
         <input id="password" name="password" type="password" placeholder="Votre password" class="form-control input-md" required>
      </div>
   </div>
   <div class="form-group">
      <div class="col-md-4 col-md-offset-4">
         <button type="submit" class="btn btn-primary">Je me connecte</button>
      </div>
   </div>
</form>
</body>
</html>