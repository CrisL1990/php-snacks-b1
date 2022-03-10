
<?php

    //Setta i parametri della query
    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];

    //memorizza la lunghezza della strina $name
    $nameLength = strlen($name);

    //Controlla che siano presenti @ e . nella variabile $mail
    $checkAt = strpos($mail, '@');
    $checkDot = strpos($mail, '.');


    //Da credenziali valide se tutti i criteri sono rispettati, altrimenti da credenziali non valide
    if(is_numeric($age) && $nameLength > 3 && $checkAt > 0 && $checkDot > 0){
        echo 'Credenziali valide';
    } else{
        echo 'credenziali non valide';
    };


?>