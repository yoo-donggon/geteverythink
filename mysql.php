


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>upload</title>
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


  if (isset($_POST['title'])   &&
      isset($_POST['username']))
  {
    $title   = get_post($pdo, 'title');
    $username    = get_post($pdo, 'username');
    
    $query    = "INSERT INTO users VALUES" .
      "($title, $username)";
    $result = $pdo->query($query);
  }

  echo <<<_END
  <form action="sqltest.php" method="post">
  <pre>
    Title <input type="text" name="title">
    Username <input type="text" name="username">
    <input type="submit" value="ADD RECORD">
  </pre>
  </form>
_END;

  $query  = "SELECT * FROM users";
  $result = $pdo->query($query);

  while ($row = $result->fetch())
  {
    $r0 = htmlspecialchars($row['title']);
    $r1 = htmlspecialchars($row['username']);
    echo <<<_END
  <pre>
    Title $r0
    Username $r1
    
  </pre>
  <form action='mysql.php' method='post'>
  <input type='hidden' name='delete' value='yes'>
  <input type='submit' value='DELETE RECORD'></form>
_END;
  }

  function get_post($pdo, $var)
  {
    return $pdo->quote($_POST[$var]);
  }
?>



    <form enctype="multipart/form-data" action="__URL__" method="POST">
    <!-- Name of input element determines name in $_FILES array -->
    <Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
</form>
</form>
</body>