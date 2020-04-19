<?PHP
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: userLogin.php');
    exit();
}
if (isset($_GET['sbmtFin'])) {

    $cc_name = $_GET['newPriority'];
    $cc_sla = $_GET['newSla'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "ithelpdesk";


// Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
    if ($conn->connect_error) {
        die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO faulttypes (faultType)
values ('$cc_name')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
    window.location.href='types.php';
    alert('RECORD UPDATED SUCCESSFULLY...Returning to Previous page');
</script>";

        echo "<script>
    window.location.href='types.php';
    alert('ITEM SUCCESSFULLY ADDED');
</script>";

    } else {


        echo "<script>
    window.location.href='types.php';
    alert('ERROR UPDATING RECORD');
</script>";
        echo 'NOPE';
    }

    $conn->close();

//else echo "ERROR, PHP DID NOT RUN";

}