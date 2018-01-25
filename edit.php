<?php
include 'connection.php';

$id = $_GET['id'];
$months = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];
if(isset($_POST['Update'])) {
  if ($_POST["day"] && $_POST["month"] && $_POST["name"] && $_POST["birth"]) {
    $day2 = $_POST['day'];
    $month2 = $_POST['month'];
    $name2 = $_POST['name'];
    $birth2 = $_POST['birth'];

    $sql = "UPDATE verjaardagskalender SET day='$day2', month='$month2', name='$name2', birth='$birth2' WHERE id=$id";
    $result=mysqli_query($db,$sql);
  }
  header('Location: index.php');
}else{
  $sql = "SELECT * FROM verjaardagskalender WHERE id=$id";
  $result = mysqli_query($db, $sql);
  $data = $result->fetch_all(MYSQLI_NUM);
  $day = $data[0][1];
  $month = $data[0][2];
  $name = $data[0][3];
  $year = $data[0][4];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Person</title>
    <link rel="stylesheet" href="create.css">
  </head>
  <body>
    <form method="POST" action="">
      <div class="accPanel">
        <h1 style="color: black;"><b>Add Person</b></h1>
        <label class="createLabel nameLabel"><b>Name<span style="color:red;">*</span></b></label><br>
        <input type="text" placeholder="Name" value="<?php echo $name; ?>" name="name" required><br>

        <label class="createLabel"><b>Date of Birth<span style="color:red;">*</span></b></label><br>
        <input type="number" min="1" max="31" placeholder="Day" value="<?php echo $day; ?>" name="day" required>

        <select type="text" placeholder="Month" name="month" required>
            <?php
                echo "<option value=" . $month ." selected>" . $month ."</option>";
                foreach($months as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>

        <input type="number" min="1900" max="2100" placeholder="Year" value="<?php echo $year; ?>" name="birth" required><br>
        <label><?php echo $passconferr ?></label>

        <button class="submitButton" type="submit" name="Update">Update</button>
      </div>
    </form>
  </body>
</html>
