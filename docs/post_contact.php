<?php
$errors = [];

if(!array_key_exists('name', $_POST) || $_POST['name'] == '') {
  $errors['name'] = "Vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $errors['email'] = "Vous n'avez pas renseigné un email valide";
}
if(!array_key_exists('message', $_POST) || $_POST['message'] == '') {
  $errors['message'] = "Vous n'avez pas renseigné votre message";
}

if(!empty($errors)) {
  /* $_SESSION['errors'] = $errors; */
  /* $_SESSION['inputs'] = $_POST; */
  $fp = fopen('data', 'w');
  $string = implode(',', $_SESSION['errors']);
  fwrite($fp, $string);
  fclose($fp);
  header('Location: data');
} else {
  /* $_SESSION['success'] = 1; */
  $headers = 'FROM: ' . $_POST['email'];
  $message = $headers . ' : ' . $_POST['message'];
  mail('dev.nicolas@gmail.com', 'Formulaire de contact', $message, $headers);
  $fp = fopen('data', 'w');
  $string = '1';
  fwrite($fp, $string);
  fclose($fp);
  header('Location: data');
}

?>
