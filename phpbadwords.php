<!-- <?php
/* $stringa = "Lorem  dolor sit amet, consectetur adipisicing elit. Ullam exercitationem animi expedita natus quaerat non consequuntur ad dignissimos, sit quae laboriosam ab excepturi qui nostrum in molestiae unde? Fugiat, quia. Lorem  dolor sit amet, consectetur adipisicing elit. Quo sapiente velit ex voluptate sunt ratione sequi? Animi aut enim fugiat harum dolore labore accusantium doloremque, minus obcaecati, quo consequuntur in."; */

/* $stringaleng = strlen($stringa);

$censura = $_GET['***'];

$paroladacensurare = $_GET['dolor']; */

/* str_replace('dolor', '***', $stringa); */
/* $strigacensurata = str_replace($stringaleng, $censura, $paroladacensurare); */

    $frase = "Cosa ottieni se metti insieme un malato di mente solitario con una società che lo abbandona e poi lo tratta come immondizia? Te lo dico io che cosa ottieni: ottieni quel  che ti meriti.";
    $paroladacensurare = $_GET["censura"];
    $censura = "*******";
// Using str_replace() function
    $frase2 = str_ireplace($paroladacensurare, $censura, $frase); 
    

?> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
        <h1>
            <?php echo ($frase2);  ?>
        </h1>
        <h1>
            <?php  echo strlen($frase2) ?>
        </h1>

</body>
</html>