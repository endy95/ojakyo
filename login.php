<!DOCtype html>
<html>
<head>
  <meta charset="utf-8">
  <title>OJAKYO</title>
  </head>
  <body>
    <h1>JOIN</h1>
    <ol>
      <li>성별,이름,자기소개,전화번호,나이 그리고 카카오톡 아이디를 입력하세요</li>
    </ol>
    <form action="process_create1.php" method="POST">
      <p><input type="text" name="sex"placeholder="성별"></p>
      <p><input type="text" name="name"placeholder="이름"></p>
      <p><textarea name="description" placeholder="자기소개"></textarea></p>
      <p><input type="text" name="number"placeholder="전화번호"></p>
      <p><input type="integer" name="age"placeholder="나이"></p>
      <p><input type="text" name="kakao"placeholder="카톡아이디"></p>
      <p><input type="submit"></p>
    </form>
  </body>
  </html>
