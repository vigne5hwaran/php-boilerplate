<?php
require_once'config.php';

$email = $_POST['email'];

$sql = "SELECT email FROM mail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $ex_mails[] = $row['email'];
  }
} else {
  echo "0 results";
}

// print_r($ex_mails);

if(in_array($email, $ex_mails)) {
  echo 'You have already Subscribed';
} else {
  $sql = "INSERT INTO mail (email) VALUES ('$email')";

  if ($conn->query($sql) === TRUE) {
    echo "success";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>