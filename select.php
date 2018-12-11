<?php
//  echo "asdasd";
  $conn = mysqli_connect("127.0.0.1:3307", "root", "tjffpa1015", "ojakyo");

  $sql = "SELECT * FROM topic WHERE id =19";
  $result = mysqli_query($conn, $sql);
  print_r(mysqli_fetch_array($result));
  $row = mysqli_fetch_array($result);//컬럼의 이름을 통해 가져온다.
  // var_dump($result);
  echo $row[1];//echo $row['title'];(이것은 연관 배열)
  //ex) echo '<h1>'.$row['title'].'</h1>';
  //    echo $row['description'];
 ?>
