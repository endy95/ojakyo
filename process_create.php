<?php
  $conn = mysqli_connect("127.0.0.1:3307",
    "root",
    "tjffpa1015",
    "ojakyo");

  $filtered = array(
    'sex' => mysqli_real_escape_string($conn, $_POST['sex']),
    'name' => mysqli_real_escape_string($conn, $_POST['name']),
    'description'=> mysqli_real_escape_string($conn, $_POST['description']),
    'number' => mysqli_real_escape_string($conn, $_POST['number']),
    'age' => mysqli_real_escape_string($conn, $_POST['age']),
    'kakao' => mysqli_real_escape_string($conn, $_POST['kakao'])
  );

  $sql = "
    INSERT INTO profiles
      (sex, name, description, number, age, kakao)
      VALUES(
        '{$_POST['sex']}',
        '{$_POST['name']}',
        '{$_POST['description']}',
        '{$_POST['number']}',
        '{$_POST['age']}',
        '{$_POST['kakao']}'
        )";

  $result = mysqli_query($conn, $sql);

  if($result === false){
    echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요.';
    print_r(mysqli_error($conn));
  } else{
    echo '프로필 등록이 완료 되었습니다.';
    print "<br></br>";
    echo '채팅창으로 <a href="http://pf.kakao.com/_wtmGj/chat">돌아가기</a>';
  }
 ?>
