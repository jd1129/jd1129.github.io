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
  $sql_select = "select title from wp_kboard_board_content ORDER BY title DESC LIMIT 1;";
  echo $sql_select;
  $res = mysqli_query($conn,$sql_select);

  echo mysqli_e($conn);

  if($res == false){
      echo mysqli_error($conn);
  }

  echo "<br>  :".$res;


  ?>


</body>
</html>
