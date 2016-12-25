 <?php
$servername = "localhost";
$username = "hero";
$password = "hero123";
$db = "pemweb2016";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

/*$sql = "SELECT * FROM member Limit 10";
$query= mysqli_query($conn, $sql);

while($row =mysqli_fetch_array($query)){

	echo $row['name']." <br>";
}
*/

//mysqli_close($conn);
?> 
