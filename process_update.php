<?php
  $conn = mysqli_connect("127.0.0.1:3307",
    "root",
    "tjffpa1015",
    "ojakyo");

 //settype($_POST['id'], 'integer');
$filtered = array(
  //'id'=>mysqli_real_escape_string($conn, $_POST['id']),
  'name'=>mysqli_real_escape_string($conn, $_POST['name']),
  'description'=>mysqli_real_escape_string($conn, $_POST['description'])
);
$sql = "
  UPDATE profiles
    SET
      description = '{$filtered['description']}'
    WHERE
      name = '{$filtered['name']}'
";
$result = mysqli_query($conn, $sql);

if($result === false){
  // echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  // error_log(mysqli_error($conn));
} else {
  echo '수정이 완료되었습니다.';
  print "<br></br>";
  echo '채팅창으로 <a href="http://pf.kakao.com/_wtmGj/chat">돌아가기</a>';
}
?>
