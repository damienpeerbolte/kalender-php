<?php
include 'connection.php';

$months = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];
if(isset($_POST['create'])) {
  if ($_POST["day"] && $_POST["month"] && $_POST["name"] && $_POST["birth"]) {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];

    $sql = "INSERT INTO verjaardagskalender (day, month, name, birth) VALUES ('$day', '$month', '$name', '$birth')";
    $result=mysqli_query($db,$sql);
    $sucmsg = "Person added succesfully!";
  } else {
    $passconferr = "NAH";
  }
  header('Location: index.php');
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
        <input type="text" placeholder="Name" name="name" required><br>

        <label class="createLabel"><b>Date of Birth<span style="color:red;">*</span></b></label><br>
        <input type="number" min="1" max="31" placeholder="Day" name="day" required>

        <select type="text" placeholder="Month" name="month" required>
            <?php
                foreach($months as $row)
                {
                    echo "<option value=" . $row .">" . $row ."</option>";
                }
            ?>
        </select>

        <input type="number" min="1900" max="2100" placeholder="Year" name="birth" required><br>
        <label><?php echo $passconferr ?></label>

        <button class="submitButton" type="submit" name="create">Create</button>
      </div>
    </form>
  </body>
</html>
