
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    a{
      --bs-link-color-rgb: white !important;
      text-decoration: none !important;
    }
  </style>
  <title>PHP Badwords</title>
</head>
<body>
  <div class="container my-5">
    <h1 class=" text-center ">
      PHP Badwords
    </h1>

    <form class="form-floating" action="risultato-get.php" method="GET">
      <!-- Text Area -->
      <h4>
      Inserisci qui il tuo testo:
      </h4>

      <textarea class="form-control" placeholder="Scrivi qui..." id="floatingTextarea2" style="height: 100px" name="text"></textarea>
      <!-- BadWord -->
      <h4 class="my-3">Inserisci qui la parola da <span class=" fw-light ">censurare</span></h4>

      <input type="text" class="form-control" id="floatingInput" placeholder="Parola da censurare" name="badWord">
      <button type="submit" class="btn btn-primary my-4">Invia</button>
    </form>
  </div>
</body>
</html>