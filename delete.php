<?php
    include 'connection.php';
    if(isset($_GET['id'])) {
        $sucmsg = "attempt to delete";
        $id = $_GET['id'];
        $sql = "DELETE FROM verjaardagskalender WHERE id=$id";

        if ($db->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        header('Location: index.php');
    }
?>

<!doctype html>
<html>
    <head>
        <title>Verjaardagskalender</title>
        <link href="main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php echo $sucmsg;?>
    </body>
</html>
