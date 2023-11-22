<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
<form action="addFriend.php" method="post">
  <h1> Tu veux être mon ami ? </h1>
  <label for="firstname"> Prénom :
    <input type="text" name="firstname" id="firstname" maxlength="45" required>
  </label>
  <br />
  <label for="lastname">Nom de famille :
    <input name="lastname" id="lastname" maxlength="45" required>
  </label>
  <br />
  <button>Add</button>
</form>
</body>
</html>