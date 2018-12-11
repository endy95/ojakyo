<?php
$conn=mysqli_connect('127.0.0.1:3307',
'root','tjffpa1015','ojakyo');
$sql="SELECT*FROM profiles where id =1";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo '<h1>'.$row['id'].'</h1>';
echo "당신의 고유ID번호입니다. 잘 기억하세요";
echo '<a href="http://pf.kakao.com/_wtmGj/chat">돌아가기</a>';
?>
