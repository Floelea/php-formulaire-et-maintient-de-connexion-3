<?php   


session_start();





$voyages = [

    [
        "destination"=> "Canada",
        "prix"=> 3455,
        "duree"=> 19,
        "image"=> "canada.jpg",
        "personnes"=> 2,
        "transport"=>"avion"

    ],
    [
        "destination"=> "Mexique",
        "prix"=> 2355,
        "duree"=> 25,
        "image"=> "mexique.jpeg",
        "personnes"=> 3,
        "transport"=>"avion"

    ],
  

];


$users = [

    [
        "username"=>"flo",
        "password"=>"elea",
    ],

];

$isConnected = false;


if (isset($_SESSION['connecte'])){
    $isConnected = true;
}



if (isset($_POST["user"]) && isset($_POST["password"])){

    $userEcritDansInput = $_POST['user'];
    $passwordEcritDansInput = $_POST['password'];

        foreach ($users as  $user) {
            
                if($userEcritDansInput == $user['username'] && $passwordEcritDansInput == $user['password']){


                   
                    $isConnected = true;

                    $_SESSION['connecte'] = true;
                    
                    
                }

        }


}

if (isset($_POST['deconnexion'])){
    unset($_SESSION['connecte']);
    $isConnected = false;
}



?>