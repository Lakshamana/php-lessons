<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <title>Mensagens divertidas</title>
  </head>

  <body>
    <?php
      // int 
      $myint = 1;

      // float
      $myfloat = 3.14156;

      // boolean
      $mybool = true;

      // strings
      $mystr = 'My Fancy String';
      // $mystr = $mystr + '<br/>'; -- wrong
      $mystr .= ' - now changed!';

      // Reading var values
      echo 'myint: ', $myint, '<br/>';
      echo 'myfloat: ', $myfloat, '<br/>';
      echo 'mybool: ', $mybool, '<br/>';
      echo 'mystr: ', $mystr, '<br/>';

      # Concatenations
      echo 'concat 1st way: ', $mystr.' - '.$myint, '<br/>';
      echo 'concat 2nd way: ', "$mystr - $myint";

      // array
    ?>
  </body>
</html>
