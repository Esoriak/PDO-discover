<?php

require_once '_connec.php';
require __DIR__ . '/src/models/friend-model.php';

$errors = [];
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
  if(!isset($_POST['firstname']) || $_POST['firstname']==='' || strlen($_POST['firstname'])>45){
    $errors[]='Il faut un prénom compris entre 1 et 45 caractères';
}
else{
    $firstname=htmlentities($_POST['firstname']);

}
if(!isset($_POST['lastname']) || $_POST['lastname']==='' || strlen($_POST['firstname'])>45){
    $errors[]='Il faut un lastname compris entre 1 et 45 caractères';
}
else{
    $lastname=htmlentities($_POST['lastname']);
}
    // $recipe = /* les données nettoyées de $_POST */

    if (empty($errors)) {
        $friend = [
          'firstname' =>$firstname,
          'lastname' => $lastname,
        ];
        gotNewFriend($friend);
        header('Location: /');
    }
}

require __DIR__ . '/src/views/form.php';