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
    'age' => '132145522',
    'kakao' => 'qweqwe'
  );
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1>프로필 등록</h1>
    <ol>
      <?php
      //echo $list;
       ?>
       <h3>성별,이름,자기소개,전화번호,나이 그리고 카카오톡 아이디를 입력하세요</h3>
    </ol>
    <form enctype="multipart/form-data" action = "process_create.php" method = "post">
      <p><input type = "text" name = "sex" placeholder="성별"></p>
      <p><input type = "text" name = "name" placeholder = "이름"></p>
      <p><textarea name = "description"
        placeholder = "자기 소개"></textarea></p>
      <p><input type = "text" name = "number" placeholder="전화번호"></p>
      <p><input type = "integer" name = "age" placeholder="나이"></p>
      <p><input type = "text" name = "kakao" placeholder="카카오톡ID"></p>
      <p><input type = "submit"></p>
      <?php
        //error_log()
        ?>
    </form>
  </body>
</html>
