<?php
  $conn = mysqli_connect("127.0.0.1:3307", "root", "tjffpa1015", "ojakyo");
  $sql = "SELECT * FROM topic";
  $result = mysqli_query($conn, $sql);
  $list = '';
  while($row = mysqli_fetch_array($result)){//if($row = mysqli_fetch_array($result)) 이면 없습니다 라고 출력!!!!!
    //<li><a href=\"index.php?id=100\"></a></li>
    $escaped_title = htmlspecialchars($row['title']);
    $list = $list."<li><a
    href=\"index1.php?id={$row['id']}\">
      {$escaped_title}</a></li>";
  }
  $article = array(
    'name' => 'Welcome',
    'description' => 'Hello, web'
  );
  $update_link ='';
  $delete_link ='';
  if(isset($_GET['id'])){
    $filtered_id = mysqli_real_escape_string($conn, $_GET['id']);//보안 관련 함수 sql주입하는 과정 관련 기호들 문자로 바꿔버린다.
    $sql = "SELECT * FROM topic WHERE id ={$filtered_id}";     //sql사용자 injection 막을 수 있다.
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['name'] = htmlspecialchars($row['name']);
    $article['description'] = htmlspecialchars($row['description']);
    $update_link = '
    <a href = "update.php?id='.$_GET['id'].'">update</a>';
    $delete_link = '
    <form action="process_delete.php" method = "POST">
      <input type = "hidden" name="id" value ="'.$_GET['id'].'">
      <input type ="submit" value="delete">
    </form>';
  }
//  print_r($article);
?>


<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ojakyo</title>
  </head>
  <body>
    <h1><a href="index1.php">오작교</a></h1>
    <ol>
      <?php
      echo $list;
       ?>
    </ol>
    <a><a href="create.php">create</a>
    <?=$update_link?>
    <?=$delete_link?>
    <h2><?=$article['title']?></h2>
    <?=$article['description']?>
  </body>
</html>
