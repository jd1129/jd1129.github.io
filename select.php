<!doctype html>
<html>
<head>
    <meta charset="utf-8">
      <title>onsemilaw - admin page</title>
</head>
<body>
  <h1>WEB</h1>
    <ol>
        <li>HTML</li>
    </ol>
  <h2>
  </h2>

  <?php
    $conn = mysqli_connect("onsemilaw01.cafe24.com","onsemilaw01","dhstoalfh00","onsemilaw01");
    $sql_select = "select title,content from wp_kboard_board_content ORDER BY title DESC LIMIT 10;";
    echo $sql_select;
    $res = mysqli_query($conn,$sql_select);

    //var_dump($res);

    $row = mysqli_fetch_array($res);
//    var_dump($row);

    echo '<h1>'.$row['title'].'</h1>';
    echo $row['content'];

    while($row = mysqli_fetch_array($res)){
      echo '<h1>'.$row['title'].'</h1>';
      echo $row['content'];
    }

    if($res == false){
        echo mysqli_error($conn);
    }

    //echo "<br>  :".$res;


  ?>


</body>
</html>
