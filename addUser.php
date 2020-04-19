<?PHP
session_start();
if(!isset($_SESSION['username']))
{
    // not logged in
    header('Location: userLogin.php');
    exit();
}
if (isset($_GET['sbmtFin'])) {

    $cc_name1 = $_GET['username'];
    $cc_name2 = $_GET['fullName'];
    $cc_name3 = $_GET['userType'];

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


    $sql = "INSERT INTO users (username,fullName,userType)
    values ('$cc_name1','$cc_name2','$cc_name3')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
    window.location.href='userSettings.php';
    alert('RECORD UPDATED SUCCESSFULLY...Returning to Previous page');
</script>";

        echo "<script>
    window.location.href='userSettings.php;
    alert('User SUCCESSFULLY ADDED');
</script>";

    } else {


        echo "<script>
    window.location.href='userSettings.php';
    alert('ERROR UPDATING RECORD');
</script>";
    }

    $conn->close();

//else echo "ERROR, PHP DID NOT RUN";***/

}