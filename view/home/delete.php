<?php
    if(isset($_POST['yes'])) {
      removeRow($id);
      header('location: ' . URL . 'home/index');
    }
    else if(isset($_POST['no'])) {
      header('location: ' . URL . 'home/index');
    }
?>
<!doctype html>
<html>
    <head>
        <title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>Are you sure you want to delete the birthday with ID:<?php echo $id ?></h1>
        <form class="" method="post">
          <input type="submit" name="yes" value="Yes">
          <input type="submit" name="no" value="No">
        </form>
    </body>
</html>
