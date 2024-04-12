<?php 
$text = $_GET['text'];
$badWord = $_GET['badWord'];

// var_dump($text);
// var_dump($badWord);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Risultato get</title>
</head>
<body>
  <h1>Testo:</h1>
  <h3> <?php echo $text ?></h3>
</body>
</html>