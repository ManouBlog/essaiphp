<?php
  session_start();

$connexion = mysqli_connect("localhost","root","","formulaire");
if (!$connexion) {
     echo "connexion failled".mysqli_connect_error($connexion);
}
 if (isset($_POST['submit'])) {

     $first_name = $_POST['first_name'];
     $second_name = $_POST['second_name'];
     $email = $_POST['email'];
     $password = $_POST['pass'];
     
     $_SESSION["name"] = $first_name;
     $_SESSION["prenom"] = $second_name;
     $_SESSION["my_email"] =  $email;
     $_SESSION["password"] =  $password;
     $_SESSION["time"] = date('d-m-y');
     $_SESSION["heure"] = date('H\h i\m\i\n s\s');


     $sql = "INSERT INTO users (first_name,second_name,email,pass) VALUES ('$first_name','$second_name','$email','$password')";
     $query = mysqli_query($connexion,$sql);
     if ($query) {
         header('location:space.php');
     }else {
         echo "erreur".$sql.mysqli_error($connexion);
     }
 
 }

mysqli_close($connexion);

?>

<!DOCTYPE html>
<html lang="FR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscriptions.css">
    <title>Page_inscription</title>
</head>
<body>
    <div class="conteneur">
       <div class="conteneur_image">
       </div>
       <div class="conteneur_formulaire">
           <h1>Inscription</h1>
           <form  id= "my_form" action="" method="post">
              <div>
              <label for="name">Fisrt Name:</label><br>
               <input type="text" class="input" placeholder="write your name" name="first_name" id="name" value="<?php if (isset($_POST['submit']))
               {echo htmlspecialchars($_POST['first_name']);} ?>" required autofocus> 
              </div>
              <div>
              <label for="prenom">Second Name:</label><br>
               <input type="text" class="input" placeholder="write your second name" name="second_name" id="prenom" value="<?php if (isset($_POST['submit'])){echo htmlspecialchars($_POST['second_name']);} ?>" required autofocus> 
              </div>
              <div>
                  <label for="email">Email:</label> <br>
                  <input class="input" type="email" placeholder="email@gmail.com"  name="email" id="email" value="<?php if (isset($_POST['submit'])){echo htmlspecialchars($_POST['email']);} ?>"  required>
              </div>
              <div>
                  <label for="pass">Password:</label><br>
                  <input class="input" type="password" placeholder="******"  name="pass" id="pass"  required>
              </div>
              <div>
                  <input type="submit" name="submit" value="Envoyer">
              </div>
           </form>
       </div>
    </div>
</body>
</html>