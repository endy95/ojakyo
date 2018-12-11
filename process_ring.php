<?php
  $conn = mysqli_connect("127.0.0.1:3307",
    "root",
    "tjffpa1015",
    "ojakyo");
    $sql = "SELECT * FROM profiles where name = '{$_POST['name']}'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);//if($row = mysqli_fetch_array($result)) 이면 없습니다 라고 출력!!!!!


    if($row['ring'] === '2'){
      print "상대방이 수락하였습니다!!!";
      echo '<br></br>';
      print "상대방의 연락을 기다리세요.";
      return;
    }

    if(isset($row['partner'])){
      echo '<br>알림 신청이 왔습니다.</br>';
      $sql = "SELECT name, description, age FROM profiles where name = '{$row['partner']}'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
      $escaped_title = htmlspecialchars($row['name']);
      print "신청자는 {$row['name']} ";
      print "자기소개는 {$row['description']} 입니다.";
      echo '<br></br>';
      print "나이는 {$row['age']}살 입니다.";
      echo '<br></br>';
    }else{
      echo '아무 알림이 없습니다.';
      echo '채팅창으로 <a href="http://pf.kakao.com/_wtmGj/chat">돌아가기</a>';
      return ;
    }
    $article = array(
      'partner' => 'Welcome'
    );

  $result = mysqli_query($conn, $sql);
  // if($result === false){
  //   echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
  //   print_r(mysqli_error($conn));
  // } else{
  //   echo '성공했습니다. <a href="index1.php">돌아가기</a>';
  // }

  ?>
 <!doctype html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>WEB</title>
   </head>
   <body>
     <h4>아무 알림이 없다면 돌아가기를 누르세요.</h4>
     <h1>선택하세요.</h1>
     <h3>수락을 원한다면 상대방의 이름을 거절하시려면 거절을 입력하세요.</h3>
     <ol>
       <?php
       //echo $list;
        ?>
     </ol>
     <form enctype="multipart/form-data" action = "done.php" method = "post">
       <p><input type = "text" name = "name" placeholder="상대방의 이름/거절"></p>
       <p><input type = "submit"></p>
       <?php
         //error_log()
         ?>
     </form>
   </body>
 </html>
