<?php
  $conn = mysqli_connect("127.0.0.1:3307", "root", "tjffpa1015", "ojakyo");
  $sql = "SELECT * FROM profiles";
  $result = mysqli_query($conn, $sql);

?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1>알림 확인하기</h1>
    <ol>
      <?php
      //echo $list;
       ?>
    </ol>
    <form enctype="multipart/form-data" action = "process_ring.php" method = "post">
      <p><input type = "text" name = "name" placeholder="당신의 이름"></p>
      <p><input type = "submit"></p>
      <?php
        //error_log()
        ?>
    </form>
  </body>
</html>
