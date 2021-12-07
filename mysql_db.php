<?php
      include_once 'Connection.php';
?>

<!DOCTYPE html>
<html lang="nl">
<link rel="stylesheet" href="style.css" />

<header>
    <h1>MySql database</h1>
</header>

<?php
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, light, temperature, reg_data FROM MyGuests";

$id = "SELECT id from MyGuests";

$results = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>id</th>
<th>Light</th>
<th>temperature</th>
<th>Time</th>
</tr>";

while($row = mysqli_fetch_assoc($results))
{
   echo "<tr>";
   echo "<td>" , $row['id']   , "</td>";
   echo "<td>" , $row['Light']   , "</td>";
   echo "<td>" , $row['Temperature']   , "</td>";
   echo "</td>";
}
echo "</table>";

?>
