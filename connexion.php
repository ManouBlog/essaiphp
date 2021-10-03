<?php


$connexion = mysqli_connect("localhost","root","","formulaire");
if (!$connexion) {
     echo "connexion failled".mysqli_connect_error($connexion);
}
if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $email_check = "SELECT id,first_name,second_name FROM users WHERE email = '$email'";
   $result = mysqli_query($connexion,$email_check);

   if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($connexion);
    while ($row) {
        echo "id :".$row["id"]."name:".$_row["first_name"]."last_name:".$_row["second_name"];
     }
   }
   else {
       echo "0 resultat";
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
    <link rel="stylesheet" href="connexions.css">
    <title>Se connecter</title>
</head>
<body>
    <div class="content">
        <h1>Se connecter</h1>
           <form action="" method="post">

           <div class="form_email">
           <label for="email">Email:</label> <br>
            <input class="input" type="email" placeholder="email@gmail.com"  name="email" id="email">
           </div>
         
           
           <div class="form_pass">
           <label for="pass">Password:</label><br>
            <input class="input" type="password" placeholder="******"  name="pass" id="pass">
           </div>
           <div>
            <input type="submit" name="submit" value="Envoyer">
              </div>

           </form>
    </div>
</body>
</html>