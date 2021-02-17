<?php
function validate_login($login, $password) {
  $login_bd = 'lakshamana@lakshamana.me';
  $password_hash = 'deadbeef';

  if ($login == $login_bd && $password == $password_hash) {
    return true;
  }
  return false;
}
?>
