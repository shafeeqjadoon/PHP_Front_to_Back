//sessions are more secure than cookies
//sessions are stored on the serverO
<?php
  if (isset($_POST['submit'])){
    session_start();
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);
    // using header for redirection
    header('Location: page3.php');
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Session</title>
  </head>
  <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
      <input type="text" name="name" value="" placeholder="Enter Name">
      <br>
      <input type="text" name="email" value="" placeholder="Enter Email">
      <br>
      <input type="submit" name="submit" value="submit">
      <br>
    </form>
  </body>
</html>
