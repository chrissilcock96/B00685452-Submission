
<?php

if (isset($_GET['sbmt5'])) {

    $cc_id = $_GET['id'];
    $cc_name = $_GET['name'];



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


    $sql = "UPDATE faulttypes SET faultType = '$cc_name' where id='$cc_id'";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
            window.location.href='types.php';
            alert('RECORD UPDATED SUCCESSFULLY...Returning to Edit Page');
            </script>";

        $result = $conn->query($sql);

    } else {

        echo "<script>
            window.location.href='types.php';
            alert('NO RECORDS UPDATED');
            </script>";
    }

    $conn->close();


} else echo "ERROR, PHP DID NOT RUN";


?>
