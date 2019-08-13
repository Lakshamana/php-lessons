<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>Mensagens divertidas</title>
  </head>

  <body>
    <?php
      // array - default = indexed to 0
      $songs = array('disco', 'rock');
      $br = '<br/>';

      $songs[0] = array('Gimme the night', 'Dance little lady');
      $songs[1] = array('Hotel California', 'Sultans of swing');

      // print whole array
      print_r($songs);
      echo $br;
      echo 'Greatest disco songs of all times: '.$songs[0][0]
    ?>
  </body>
</html>
