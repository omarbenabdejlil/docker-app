<?php
$host = "mysql";
$user = "root";
$password = "123456";
$database = "mysql";
$table = "etudiant";


  $db = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  echo "<h2>TODO</h2><ol>";

$sql = "SELECT id, name, age FROM etudiant";
$result = $db->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - age" . $row["age"]. "<br>";
  }
} else {
  echo "0 results";
}

?>
