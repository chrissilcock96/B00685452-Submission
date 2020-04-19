
<?php

if (isset($_GET['sbmt5'])) {

    $cc_password1 = $_GET['password1'];
    $cc_password2 = $_GET['password2'];
    $cc_Id = $_GET['id'];

    $crypted = password_hash($cc_password1, PASSWORD_DEFAULT);

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

    if ($cc_password1 == $cc_password2) {


        $sql = "UPDATE users SET password='$crypted' where id ='$cc_Id';";

        if ($conn->query($sql) === TRUE) {

            echo "<script>
            window.location.href='resetPassword.php';
            alert('Password Successfully reset');
            </script>";

            $result = $conn->query($sql);

        } else {

            echo "<script>
            window.location.href='userSettings.php';
            alert('NO RECORDS UPDATED');
            </script>";
        }

    } else echo "ERROR, PHP DID NOT RUN";

        $conn->close();

    }


    if ($cc_password2!== $cc_password1) {

        echo "<script>
            window.location.href='resetPassword.php';
            alert('Error, passwords did not match, please try again');
            </script>";

    }




?>
