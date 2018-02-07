<?php
  function getBirthdays(){
      $db = openDatabaseConnection();
      $sql = "SELECT * FROM verjaardagskalender";
      $query = $db->prepare($sql);
      $query->execute();
      $db = null;
      return $query->fetchAll();
  }

  function getMonths(){
      $months = ["Januari","Februari","Maart","April","Mei","Juni","Juli","Augustus","September","Oktober","November","December"];
      return $months;
  }

  function removeRow($id) {
  	$db = openDatabaseConnection();
  	$sql = "DELETE FROM verjaardagskalender WHERE id=$id";
  	$query = $db->prepare($sql);
  	$query->execute();
  	$db = null;
  }

  function createBirthday() {
    $day = $_POST['day'];
    $month = $_POST['month'];
    $name = $_POST['name'];
    $birth = $_POST['birth'];

  	$db = openDatabaseConnection();
  	$sql = "INSERT INTO verjaardagskalender (day, month, name, birth) VALUES ('$day', '$month', '$name', '$birth')";
  	$query = $db->prepare($sql);
  	$query->execute(array(
  		':day' => $day,
  		':month' => $month,
  		':name' => $name,
      ':birth' => $birth
    ));
  	$db = null;
  }

  function getBirthday($id) {
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM verjaardagskalender WHERE id=$id";
    $query = $db->prepare($sql);
    $query->execute();
    $db = null;
    return $query->fetch();
  }

  function editRow($id) {
    $day2 = $_POST['day'];
    $month2 = $_POST['month'];
    $name2 = $_POST['name'];
    $birth2 = $_POST['birth'];

  	$db = openDatabaseConnection();
  	$sql = "UPDATE verjaardagskalender SET day='$day2', month='$month2', name='$name2', birth='$birth2' WHERE id=$id";
  	$query = $db->prepare($sql);
  	$query->execute(array(
  		':day' => $day2,
  		':month' => $month2,
  		':name' => $name2,
  		':birth' => $birth2));
  	$db = null;
  }
