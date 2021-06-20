<?php

 $conn =new mysqli("localhost", "id17040221_bank8", "lQM_=y)y7AGpjui?","id17040221_bank");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email=$_POST['email'];
$customername=$_POST['customername'];
$amount=$_POST['amount'];

  $sql = "INSERT INTO emp(email,customername,amount) VALUES ('$email','$customername','$amount')";

if ($conn->query($sql) == TRUE) {
  echo "Money has been transferred succesfully!...please go back";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
