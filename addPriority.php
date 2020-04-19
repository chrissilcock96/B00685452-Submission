<?php
session_start(); // session

if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: userLogin.php'); //Session prevention
    exit();
}

if (isset($_GET['sbmtFin'])) {

$cc_name = $_GET['newPriority'];
$cc_sla = $_GET['newSla'];


$servername = "localhost";
$username = "root";
$password = "";
$dbName = "ithelpdesk"; //DB


// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
}


$sql = "INSERT INTO priority (priorityLevel,sla)
values ('$cc_name','$cc_sla')";

if ($conn->query($sql) === TRUE) {

echo "<script>
    window.location.href='editPriority.php';
    alert('RECORD UPDATED SUCCESSFULLY...Returning to Previous page');
</script>";

echo "<script>
    window.location.href='editPriority.php';
    alert('ITEM SUCCESSFULLY ADDED');
</script>";

} else {


echo "<script>
    window.location.href='editPriority.php';
    alert('ERROR UPDATING RECORD');
</script>";
echo 'NOPE';
}

$conn->close();

//else echo "ERROR, PHP DID NOT RUN";

}