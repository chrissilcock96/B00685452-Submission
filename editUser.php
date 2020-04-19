
<?php

if (isset($_GET['sbmt5'])) {

    $cc_username = $_GET['userName'];
    $cc_fullName = $_GET['fullName'];
    $cc_type = $_GET['userType'];
    $cc_Id = $_GET['id'];



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


    $sql = "UPDATE users SET username='$cc_username',fullName ='$cc_fullName', userType ='$cc_type' where id ='$cc_Id';";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
            window.location.href='userSettings.php';
            alert('RECORD UPDATED SUCCESSFULLY...Returning to Edit Page');
            </script>";

        $result = $conn->query($sql);

    } else {

        echo "<script>
            window.location.href='userSettings.php';
            alert('NO RECORDS UPDATED');
            </script>";
    }

    $conn->close();


} else echo "ERROR, PHP DID NOT RUN";


?>
