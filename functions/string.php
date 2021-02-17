<?php
/*
 * // strtolower
 * $text = strtolower('The Quick Brown Fox Jumped Over The Lazy Dog.');
 * echo $text.'<br>';
 *
 * // strtoupper
 * $text = strtoupper('The Quick Brown Fox Jumped Over The Lazy Dog.');
 * echo $text.'<br>';
 *
 * // ucfirst
 * $text = ucfirst('The Quick Brown Fox Jumped Over The Lazy Dog.');
 * echo $text.'<br>';
 *
 * // strlen
 * $text = strlen('The Quick Brown Fox Jumped Over The Lazy Dog.');
 * echo $text.'<br>';
 */

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';

if (strlen($cpf) !== 11 && $cpf != '') {
  echo 'CPF must have exactly 11 characters.';
}

echo substr($cpf, 0, 11);
?>

<form action="" method="post">
  <label for="ipt">
    CPF (11-char value):
    <input type="text" name="cpf">
  </label>
  <input type="submit" value="submit">
</form>
