
<?php
    //-------------------------------INIZIO SNACK 1--------------------------------------------------------//
    //Setta i parametri della query
    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];

    //memorizza la lunghezza della strina $name
    $nameLength = strlen($name);

    //Controlla che siano presenti @ e . nella variabile $mail
    $checkAt = strpos($mail, '@');
    $checkDot = strpos($mail, '.');

    $result = '';


    //Da credenziali valide se tutti i criteri sono rispettati, altrimenti da credenziali non valide
    if(is_numeric($age) && $nameLength > 3 && $checkAt > 0 && $checkDot > 0){
        $result = 'Credenziali valide';
    } else{
        $result = 'credenziali non valide';
    };
    //-------------------------------FINE SNACK 1--------------------------------------------------------//



    //-------------------------------INIZIO SNACK 2--------------------------------------------------------//

    //Paragrafo di partenza
    $paragrafo = "La.risposta.alla.domanda.fondamentale.sulla.vita.l'universo.e.tutto.quanto.è.42";

    //Crea un array ciclando il paragrafo e usando il . come separatore
    $dividedText = explode('.', $paragrafo);

    echo "<h1>SNAK 2</h1>";
    
    //Cicla l'array e ne stampa ogni elemento a scherno in un nuovo paragrafo
    for($i = 0; $i < count($dividedText); $i++){
        echo "<p>$dividedText[$i]</p>";
    };

    echo "<hr/>";
    //-------------------------------FINE SNACK 2--------------------------------------------------------//
    
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
    <h1>Snack 1</h1>
    <h1><?php echo $result ?></h1>
    <hr>
</body>
</html>