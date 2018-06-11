<?php
  header('Access-Control-Allow-Origin: *');
  
  // Maak contact met de database
  include("./connect_db.php");

  var_dump($_POST);

  // Selecteer alle velden uit de database
  // $sql = "SELECT * FROM `users`";

  // Vuur de query af op de database
  // $result = mysqli_query($conn, $sql);

  // Maak een php array ervan
  // $records = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Maak er een json string van
  // echo json_encode($records);
?>