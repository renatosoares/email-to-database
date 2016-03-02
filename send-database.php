<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $specify = $_POST['specify'];
  $city = $_POST['city'];
  $uf = $_POST['uf'];
  $message = $_POST['message'];
}
$servername = "localhost";
$username = "root";
$password = "geladeira123";
$dbname = "formtest";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);
// checar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"])) {
  $sql = "INSERT INTO testmails (name, email, phone, specify, city, uf, message)
  VALUES ('$name', '$email', '$phone', '$specify', '$city', '$uf', '$message')";

  if ($conn->query($sql) === TRUE) {
      echo "Mensagem enviada com sucesso! $name";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
}else{
  echo "Mensagem nao enviada";
}


$conn->close();
?>
