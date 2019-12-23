<html>
  <head>
    <link rel="stylesheet" href="style.css"
    <meta charset="utf-8">
    <title>Apply</title>
    </head>
  <body>
    <h1 class="unselectable">PvPCity Application</h1>
    <form action="index.php" method="post">
      <input type="text" name="IGN" placeholder="IGN"><br>
      <input type="text" name="Discord" placeholder="Discord"><br>
      <input type="text" name="Age" placeholder="Age">
      <textarea name="Why" placeholder="Why do you want to be staff?"></textarea>
      <input type="submit" name="Apply">
    </form>
  </body>
</html>
<?php
if( isset($_POST['IGN'] ) && isset( $_POST['Discord'] ) && isset( $_POST['Age'] ) && isset( $_POST['Why'] ) )
{
  $txt= $_POST['IGN'].' - '.$_POST['Discord'].' - '.$_POST['Age'].' - '.$_POST['Why'] . PHP_EOL;
  file_put_contents('data.txt', $txt, FILE_APPEND);
}
?>
