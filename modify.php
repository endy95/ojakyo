<?php
$conn=mysqli_connect('127.0.0.1:3307',
'root','tjffpa1015','ojakyo');
$sql="SELECT*FROM profiles where id = {$_POST['id']}";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$filtered = array(
  'id'=>mysqli_real_escape_string($conn,$sql)
);

$sql="
UPDATE profiles
 SET
    description = '활성화'
WHERE
     id = {$_POST['id']}
     ";
  echo "다시 서비스를 이용하시려면 재등록해주세요";
$result = mysqli_query($conn, $sql);
 ?>
 <!DOCtype html>
 <html>
 <head>
   <meta charset="utf-8">
   <title>OJAKYO</title>
   </head>
   <body>
     <h1>비활성화 되었습니다.</h1>
     <a href="http://pf.kakao.com/_wtmGj/chat">돌아가기</a>
   </body>
   </html>
