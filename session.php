<?php 
  session_start();
  if ($_SESSION["autoriser"]!="oui"){
    header("location:index.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="body">
    <div id="container">
        <h1> Merci beaucoup</h1>
        <p>  Le  Message que vous avez Envoyer sur le formulaire
            e ete envoyer evec succee sur Monsier Edness Telli. 
            </p>
        <div class="aaa">
            <a href="deconet.php">Fermer</a>

        </div>
    </div>
</body>

</html>