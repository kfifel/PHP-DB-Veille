<?php
include("./include/connexion.php");
        // $req="INSERT INTO `apprenant` (`id`, `prenom`, `nom`, `email`, `dobirthday`) 
        // VALUES (NULL, 'fifel', 'Mouad', 'mouad@fmail.com', '2000-01-09');";
        // $insert=$conn->prepare($req); 
        // $insert->execute();
        // if($insert){
        //     echo '<h1> done </h1>';
        // }else{
        //     echo '<h1> Error </h1>';
        // }
    if (isset($_POST['data'])) {

        $req = "SELECT * FROM apprenant";
        $reponse=$conn->query($req);
        
        while($user = $reponse->fetch()){
            echo $user['email'].'<br>'; 
        }
    }
      
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Youcode</title>
</head>
<body>
    
    <form action="#" method="post">
    <button class="btn btn-primary d-flex justify-content-center ml-5" name ="data">Afficher DATA</button>
    </form>
</body>
</html>