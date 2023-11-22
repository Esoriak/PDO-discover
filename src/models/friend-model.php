<?php 

function createConnection(): PDO
{
    return new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
}

function getAllFriends(): array
{
    $connection = createConnection();
    $statement = $connection->query('SELECT id, firstname, lastname FROM friend');
    $friends = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $friends;
}

function gotNewFriend(array $friend): void
{
    $connection = createConnection();
    $query = 'INSERT INTO friend (firstname, lastname) VALUES (:firstname,:lastname) ';
    $st=$connection->prepare($query);
    $st->bindValue(':firstname', $friend['firstname'], PDO::PARAM_STR);
    $st->bindValue(':lastname', $friend['lastname'], PDO::PARAM_STR);
    $st->execute();
    // lance une requête SQL pour engistrer la recette $recipe
}