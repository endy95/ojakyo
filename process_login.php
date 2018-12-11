<?php
$conn=mysqli_connect('127.0.0.1:3307','root','tjffpa1015','ojakyo');
$sql ="
INSERT INTO profiles
 (sex,name,description,number,age,kakao)
 VALUES(
   '{$_POST['sex']}',
   '{$_POST['name']}',
   '{$_POST['description']}',
   '{$_POST['number']}',
   '{$_POST['age']}',
   '{$_POST['kakao']}'
   )
";
$result=mysqli_query($conn,$sql);
if($result===false){
  echo '저장하는 과정에서 문제가 생겼습니다. 관리자에게 문의하시오.';
  error_log(mysqli_error($conn));
}else{
  echo '성공. ,<a href="select1.php">고유ID얻기</a>';
}
  echo $sql;
 ?>
