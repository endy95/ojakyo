<?php
  $conn = mysqli_connect("127.0.0.1:3307",
    "root",
    "tjffpa1015",
    "ojakyo");
    $sql = "SELECT * FROM profiles where age = {$_POST['age']} AND sex = '{$_POST['sex']}'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $list = '';

    while($row = mysqli_fetch_array($result)){//if($row = mysqli_fetch_array($result)) 이면 없습니다 라고 출력!!!!!
      $escaped_title = htmlspecialchars($row['name']);
      echo "<li><a
      href=\"check_point.php?id={$row['name']}\">
      {$row['name']}</a></li>";
        //표식남기기위한 상대방 선택한 후의 화면으로 넘어가자
    }


  $result = mysqli_query($conn, $sql);
 ?>
 <!doctype html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>WEB</title>
   </head>
   <body>
     <h1>상대방에게 신청하기</h1>
     <ol>
       <?php
       //echo $list;
        ?>
     </ol>
     <form enctype="multipart/form-data" action = "check_point.php" method = "post">
       <p><input type = "text" name = "name1" placeholder="상대방의 이름"></p>
       <p><input type = "text" name = "name2" placeholder="나의 이름"></p>
       <p><input type = "submit"></p>
       <?php
         //error_log()
         ?>
     </form>
   </body>
 </html>
