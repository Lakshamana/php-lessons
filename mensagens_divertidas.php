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
      $messages = array('msg1', 'msg2', 'msg3', 'msg4', 'msg5');
      $br = '<br/>';

      // Custom indexing - alphanumeric keys
      // $messages = array(1 => 'msg1', 'a'=> 'msg2', 'msg3', 'msg4', 'msg5');
      // echo $messages['a']; // msg2
      // echo $messages[2]; // msg3

      echo $messages[2], $br; // msg3

      // Appending values to arrays
      $new_val = 'test';
      array_push($messages, $new_val);

      // print whole array
      var_dump($messages);
      echo $br;
      print_r($messages);
    ?>
  </body>
</html>
