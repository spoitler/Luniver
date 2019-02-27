<!DOCTYPE html>
<html lang="fr" >
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>LUNIVER</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <?php
      try{
          $bdd = new PDO('mysql:host=localhost;dbname=luniver', 'admin', 'RATAL5');

      }catch (Exception $e){
          $bdd = null;
          die('Erreur : ' . $e->getMessage());
      }

      if ($bdd){
          echo "connecté";
      }

      ?>

   </body>
</html>
