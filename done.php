<?php
  $conn = mysqli_connect("127.0.0.1:3307",
    "root",
    "tjffpa1015",
    "ojakyo");
    if($_POST['name'] === '거절'){
      print "거절 하셨습니다.";
    }else{
        $sql = "SELECT * FROM profiles where name = '{$_POST['name']}'";
        $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $row = mysqli_fetch_array($result);
        echo '상대방의 전화번호는 ';
        echo $row['number'];
        echo '<br></br>';
        $sql = "
        UPDATE profiles
          SET ring = '2'

          WHERE
            name = '{$_POST['name']}'
        ";

    }
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  //   $sql = "SELECT * FROM profiles where age = {$_POST['age']}";
  //   $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  //   $list = '';
  //   while($row = mysqli_fetch_array($result)){//if($row = mysqli_fetch_array($result)) 이면 없습니다 라고 출력!!!!!
  //     //<li><a href=\"index.php?id=100\"></a></li>
  //     $escaped_title = htmlspecialchars($row['name']);
  //   // echo $escaped_title;
  //     // $list = $list."<li><a
  //     //   href=\"check_point.php\">
  //     //   {$escaped_title}</a></li>";
  //       echo "<li><a
  //         href=\"check_point.php?id={$row['name']}\">
  //         {$row['name']}</a></li>";
  //     //표식남기기위한 상대방 선택한 후의 화면으로 넘어가자
  //   }
  //
  // $result = mysqli_query($conn, $sql);
  // if($result === false){
  //   echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
  //   print_r(mysqli_error($conn));
  // } else{
  //   echo '성공했습니다. <a href="index1.php">돌아가기</a>';
  // }

 ?>
 <!-- <!doctype html>
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
     <form enctype="multipart/form-data" action = "check_point.php" method = "post">
       <p><input type = "text" name = "name1" placeholder="상대방의 이름"></p>
       <p><input type = "text" name = "name2" placeholder="나의 이름"></p>
       <p><input type = "submit"></p>
       <?php
         //error_log()
         ?>
     </form>
   </body>
 </html> -->
