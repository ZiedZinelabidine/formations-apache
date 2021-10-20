
<?php

$HOST= 'localhost';
$USER= 'test' ;
$PWD= 'test';
$DB='db' ;


//$mysqli = new mysqli('localhost', 'my_user', 'my_password', 'my_db');

echo "Connection to Database with all you credentials start ....\n" ;

echo "$HOST\n";
echo "$USER\n";
echo "$PWD\n";
echo "$DB\n" ;

$conn = new mysqli($HOST,$USER,$PWD,$DB);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
//echo 'KO connections' ;
}

echo "Good connection is ok !\n";

$sql = "SELECT name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                echo $row['name']."<br>";
        }
} else {
        echo "0 results\n";
}
echo "the end \n" ;
$conn->close();

?>

