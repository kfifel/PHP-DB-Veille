<?php
include("./include/connexion.php");
//require("./model/userStory.php");
        // $req="INSERT INTO `apprenant` (`id`, `prenom`, `nom`, `email`, `dobirthday`) 
        // VALUES (NULL, 'fifel', 'Mouad', 'mouad@fmail.com', '2000-01-09');";
        // $insert=$conn->prepare($req); 
        // $insert->execute();
        // if($insert){
        //     echo '<h1> done </h1>';
        // }else{
        //     echo '<h1> Error </h1>';
        // }
    /*if (isset($_POST['data'])) {

        $req = "SELECT * FROM apprenant";
        $reponse=$conn->query($req);
        
        while($user = $reponse->fetch()){
            echo $user['email'].'<br>'; 
        }
    }*/
      
  
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

</body>
</html>

<?php
    /*
    # variable
    $nameOfVariable ='value';
    $age = 22;
    $nom = "FIFEL";

    echo $nameOfVariable;                           value

    echo '<br>';
    echo $nom;                                      FIFEl

    echo "<br>";
    echo "nom est : $nom";                          nom est : FIFEL

    echo "<br>";
    echo 'nom est : $nom';                          nom est : $nom

    echo "<br>";
    echo 'nom est :'. $nom;                         nom est : FIFEL
    */




    /*$data = array('khalid', 'fifel');

    $data[] = 'sharp Coders'; // ajouter le mot sharp Coders a la fin du tableau
    $data[] = 00;

    array_push($data, 22, 'good', 'YouCode', 2022);

    print_r($data);

    echo "<pre>";
        print_r($data);
    echo "</pre>";*/


    /*echo '<hr>';

    print_table($data);

    echo '<hr>';

        $colors = array(1=>"red", "ali"=>"green", 3=>"blue", 4=>"yellow");
        echo $colors['ali'];

    function print_table($arr){
        echo "<pre>";
            print_r($arr);
        echo "</pre>";
    }

    function loops(){

        $x = 1;

        while($x <= 5) {
          echo "The number is: $x <br>";
          $x++;
        }

    }

    function foreachLoop(){

        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
          echo "$value <br>";
        }
        //////////////////////////////////////////////////////:
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $val) {
          echo "$x = $val<br>";
        }
    }
?>

*/




//  This is a single-line comment

#   This is also a single-line comment
/*
    This is a multiple-lines comment block
    that spans over multiple
lines
*/


    function sayHi(){
        echo "Hi";
    }
    $hi = sayHi();

    $hi();


