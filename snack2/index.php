<?php

    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    $checkName = false;
    $checkEmail =false;
    $checkAge =false;


    if (!empty($name) && !empty($email) && !empty($age)){
        //name sia più lungo di 3 caratteri
        if ( strlen($name) < 3){
            echo "nome non valido!  <br> ";
        }else{
            echo"nome valido <br>";
            $checkName= true;
        };
    
    
        // mail contenga un punto e una chiocciola
        if (strpos($email, '@')!== false && strpos($email, '.')!== false){
            echo "email valida <br>";
            $checkEmail=true;
        }else{
            echo "email non valida! <br>";
            
        };
    
        //age sia un numero
        if (is_numeric($age)){
            echo "numero valido <br>";
            $checkAge=true;
        }else{
            echo "numero non valido <br>";
        };
    };

    //Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    if ($checkName==true && $checkEmail==true && $checkAge==true) {
        echo "ACCESSO RIUSCITO <br> ";
    }else{
        echo "ACCESSO NEGATO <br> ";
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        if ($checkName==true && $checkEmail==true && $checkAge==true) {
            echo "ecco: $name";
        }
    ?>



</body>
</html>