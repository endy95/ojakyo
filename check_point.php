<?php
  $conn = mysqli_connect("127.0.0.1:3307",
    "root",
    "tjffpa1015",
    "ojakyo");
    echo '상대방의 자기소개는';
    echo '<br></br>';
    //$filtered_id = mysqli_real_escape_string($conn, $_POST['name1']);//보안 관련 함수 sql주입하는 과정 관련 기호들 문자로 바꿔버린다.
    $sql = "SELECT * FROM profiles where name = '{$_POST['name1']}'";     //sql사용자 injection 막을 수 있다.
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    // echo htmlspecialchars($row['number']);

    $filtered = array(
      'name1' => mysqli_real_escape_string($conn, $_POST['name1']),
      'name2' => mysqli_real_escape_string($conn, $_POST['name2'])
    );

  $sql = "
      UPDATE profiles
        SET
          ring = '1',
          partner = '{$_POST['name2']}'
        WHERE
          name = '{$_POST['name1']}'
    ";
    /*자기소개 정도 출력*/
    echo $row['description'];
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
 //settype($_POST['id'], 'integer');
// echo $sql;

// $result = mysqli_query($conn, $sql);
//echo $sql;
if($result === false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
}
?>
