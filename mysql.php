<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once 'login.php';

    try
    {
        $pdo = new PDO($attr, $user, $pass, $opts);
    }
        catch (PDOException $e)
    {
        throw new PDOException($e->getMessage(), (int)$e->getCode());
    }

    $query  = "SELECT * FROM users";
    $result = $pdo->query($query);
    while ($row = $result->fetch())
    {
        echo 'Title:   ' . htmlspecialchars($row['title'])   . "<br>";
        echo 'Username:    ' . htmlspecialchars($row['username'])    . "<br>";
    }
    phpinfo()
?>
</body>
</html>