<?php
session_start();
?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="spaces.css">
    <title>MYspace</title>
</head>
<body>
   <header>
       <div class="logo">
         
       </div>
        <a href="inscription.php">Se déconnecter</a>
   </header>
   <main >
        <div class="my_information">
        <h1>
         <?php echo "Bienvenue  ".$_SESSION["name"];?>
      </h1>
      <h2>
      <?php echo "Nom : ". $_SESSION["name"];?> 
     </h2>
      <h2>
      <?php echo "Prénoms : ".$_SESSION["prenom"];?> 
     </h2>
      <h2>
      <?php echo "Email : ".$_SESSION["my_email"];?> 
      </h2>
      <h2>
      <?php echo "Création : ".$_SESSION["time"]. " à : ".$_SESSION["heure"] ;?> 
      </h2>
      
        </div>
   </main>
</body>
</html>
