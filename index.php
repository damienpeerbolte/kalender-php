<?php
  include 'connection.php';

  $months = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];
  $sql = "SELECT * FROM verjaardagskalender";
  $result = mysqli_query($db, $sql);
  $data = $result->fetch_all(MYSQLI_NUM);
?>
<!doctype html>
<html>
	<head>
		<title>Verjaardagskalender</title>
    <link href="main.css" rel="stylesheet" type="text/css">
	</head>
	<body>
    <?php
      foreach($months as $row)
      {
          echo "<h1>" . $row ."</h1>";
          foreach($data as $item){
              if($row == $item[2]){
                  echo "<h2>" . $item[1] . "</h2>
                  <p>
                      <a href='edit.php?id=" . $item[0] . "'>
                      " . $item[3] . " (" . $item[4] . ")</a>
                      <a href='delete.php?id=" . $item[0] . "'>x</a>
                  </p>";
              }
          }
      }
      echo "<p><a href='create.php'>+ Toevoegen</a></p>";
    ?>
	</body>
</html>
