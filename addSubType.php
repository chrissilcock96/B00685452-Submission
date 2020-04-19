<?PHP
session_start();
if(!isset($_SESSION['username'])) //session
{
    // not logged in
    header('Location: userLogin.php');
    exit();
}
if (isset($_GET['sbmtFin'])) {

    $cc_name2 = $_GET['name2'];
    $cc_name = $_GET['selectType'];

    $servername = "localhost";
    $username = "root"; //db
    $password = "";
    $dbName = "ithelpdesk";


// Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
    if ($conn->connect_error) {
        die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO faultsubtypes (faultType,faultSubtype)
    values ('$cc_name','$cc_name2')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
    window.location.href='subType.php';
    alert('RECORD UPDATED SUCCESSFULLY...Returning to Previous page');
</script>";

        echo "<script>
    window.location.href='subType.php;
    alert('ITEM SUCCESSFULLY ADDED');
</script>";

    } else {


        echo "<script>
    window.location.href='subType.php';
    alert('ERROR UPDATING RECORD');
</script>";
    }

    $conn->close();

//else echo "ERROR, PHP DID NOT RUN";***/

}