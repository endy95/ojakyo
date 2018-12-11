<?php
  $conn = mysqli_connect("127.0.0.1:3307", "root", "tjffpa1015", "ojakyo");
  $sql = "SELECT * FROM profiles";
  $result = mysqli_query($conn, $sql);
  $list = '';

  $article = array(
    'sex' => 'sex',
    'name' => 'Welcome',
    'description' => 'Hello, web',
    'number' => '010-0000-0000',
    'age' => '132145522'
  );
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1>상대방 찾기</h1>
    <ol>
      <?php
      //echo $list;
       ?>
    </ol>
    <form enctype="multipart/form-data" action = "process_check.php" method = "post">
      <p><input type = "text" name = "sex" placeholder="상대방의 성별"></p>
      <p><input type = "integer" name = "age" placeholder="상대방의 나이"></p>
      <p><input type = "submit"></p>
      <?php
        //error_log()
        ?>
    </form>
  </body>
</html>
