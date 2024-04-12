<?php 
$text = $_GET['text'];
$badWord = $_GET['badWord'];

$text_length = strlen($text);
// var_dump($text);
// var_dump($badWord);
$text_censured = str_replace($badWord, '***',$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Risultato get</title>
</head>
<body>
  <h1 class="my-5">Risultato</h1>
  <h3 class="my-2"> <?php echo  $text ?></h3>
  <h3 >La lunghezza del testo inserito è: <?php echo $text_length ?></h3>
  <h3 class="my-5">Risultato della censura:</h3>
  <p><?php echo $text_censured  ?></p>
</body>
</html>