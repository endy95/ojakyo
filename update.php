<?php
  $conn = mysqli_connect("127.0.0.1:3307", "root", "tjffpa1015", "ojakyo");

$sql = "SELECT * FROM profiles";
$result = mysqli_query($conn, $sql);
$list = '';
/*while($row = mysqli_fetch_array($result)) {
  $escaped_title = htmlspecialchars($row['title']);
  $list = $list."<li><a href=\"index1.php?id={$row['id']}\">{$escaped_title}</a></li>";
}*/
$article = array(
  'title'=>'',
  'description'=>''
);
$update_link = '';
if(isset($_GET['id'])) {
  $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);
  $sql = "SELECT * FROM topic WHERE id={$filtered_id}";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $article['name'] = htmlspecialchars($row['name']);
  $article['description'] = htmlspecialchars($row['description']);
  $update_link = '<a href="update.php?id='.$_GET['id'].'">update</a>';
}
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="update.php">프로필 수정</a></h1>
    <ol>
      <?=$list
      /*<p><input type="text" name="title" placeholder="이름은 입력하세요."value="<?=$_GET['id']?>">*/
      ?>
    </ol>
    <form action="process_update.php" method="POST">
      <p><input type="text" name="name" placeholder="이름" value="<?=$article['title']?>"></p>
      <p><textarea name="description" placeholder="자기소개"><?=$article['description']?></textarea></p>
      <p><input type="submit"></p>
    </form>
  </body>
</html>
