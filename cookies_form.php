
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Cookies POST Method PHP.">
    <meta name="author" content="Axel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP - Fumioo</title>
  </head>
<body>
  <a type="button" href="cookies_welcomeuser.php">Click here for example welcome page!</a>
  <br>
  <a>Status:</a>
</body>
</html>
<?php
    if (isset($_POST['user']))
    
    {
        $user=$_POST['user'];
        setcookie('username', $user);
        echo "Successfully saved cookies. User: <strong>", $user, "</strong>";
    }
    else
    {
        echo "Can't find cookies.";
    }
?>