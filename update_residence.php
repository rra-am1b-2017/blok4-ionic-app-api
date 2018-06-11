<?php
  header('Access-Control-Allow-Origin: *');  
  // Maak contact met de database
  include("./connect_db.php");
  // Include een schoonmaakfunctie.
  include("./functions.php");

  // Maak de $_POST waarden schoon.
  $id = sanitize($_POST["id"]);
  $residence = sanitize($_POST["residence"]);

  // Update het residence veld in de users tabel.
  $sql = "UPDATE `users` SET `residence` = '" . $residence . "' WHERE `id` = '" . $id . "'";

  // Vuur de query af op de database
  $result = mysqli_query($conn, $sql);

  if ($result) {
    $message = [["message" => "Succes"]];
    echo json_encode($message);
  } else {
    $message = [["message" => "Error"]];
    echo json_encode($message);
  }
?>