<?php
 
 // servername => localhost
 // username => root
 // password => empty
 // database name => staff
 $conn = mysqli_connect("localhost", "root", "", "test_db");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 // Taking all 5 values from the form data(input)

$id = $_REQUEST["bid"];
// sql to delete a record

$sql = "DELETE FROM debtors WHERE d_id=$id;";
$sql1 = "SELECT * FROM debtors WHERE d_id=$id;";
$result = $conn->query($sql1);
$row1 = $result->fetch_assoc();

$name = $row1["d_name"];
$del = "DROP TABLE $name;";
$result = $conn->query($del);

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("Location:HomePage.php");
?>
