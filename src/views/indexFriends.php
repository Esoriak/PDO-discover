<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>List of Friends</h1>
  <ul>
    <?php foreach ($friends as $friend) : ?>
      <li>
          <?= $friend['firstname'] ?>
          <?= $friend['lastname'] ?>
      </li>
    <?php endforeach; ?>
  </ul>

    <?php require('form.php') ?>
</body>

</html>