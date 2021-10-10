<?php
$servername = "localhost";
$username = "student_12002476";
$password = "password";
$dbname = "student_12002476";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (word, time, score)
VALUES ('pizza', now(), 0)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

} else {
        ?>
          <form method='get'>
              <input type="text" name="word"/>
              <input type="submit" />
          </form>
        <?php
}

$sql = "SELECT id, worm, score FROM example ORDER BY SCORE DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        ?>
            <a href="?id=<?php print($row)["id"] ); ?>">
            <?php print($row)["word"] ); ?>

            echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
      }
      
} else {
  echo "0 results";
}

$conn->close();
?>