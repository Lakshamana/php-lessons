<?php
$name = $_POST['name'];
$cpf = $_POST['cpf'];

if (isset($name) && empty($name)) {
  echo 'Name cannot be empty. ';
}

if (isset($cpf) && empty($cpf)) {
  echo 'CPF cannot be empty. ';
}

if (isset($cpf) && !is_numeric($cpf)) {
  echo 'CPF number must contain only numbers. ';
}
?>
<form action="" method="post">
  <label for="name">
    Full Name*:
    <input id="name" type="text" name="name">
  </label>
  <label for="cpf">
    CPF Number*:
    <input id="cpf" type="text" name="cpf">
  </label>
  <input type="submit" value="Signup">
</form>
