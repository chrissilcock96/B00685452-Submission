<link href="css/custom-css.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<style>

    div {
        background-image: url('images/KilwaughterShot3.jpg');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<?php
?>
<body>
<div align="center">
<div class="wrapper fadeInDown">
    <div id="formContent">
        <Br>
        <img src="images/Kilwaughter.jpeg" alt="HTML Letters">
        <br>
        <br>
        <H4>IT HELPDESK</H4>
        <H5>Business User Login</H5>
        <BR>
        <form method="GET" action = "userLogin.php">
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="USERNAME">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="PASSWORD" ><BR><BR>
            <input type="submit" class="fadeIn fourth" name="sbmt">
        </form>


    </div>
</div>
</div>
<?php
?>

<!------ Include the above in your HEAD tag ---------->

<?php

if(isset($_GET['sbmt'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "ithelpdesk";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
    if ($conn->connect_error) {
        die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
    } else {


        $cc_username = $_GET['login'];
        $cc_password = $_GET['password'];

        $sql = "select * from users where username = '$cc_username'";

        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {


            while ($row = $result->fetch_assoc()) {

                $check1 = $row['username'];
                $check2 = $row['password'];

                if ($check1 == $cc_username && $check2 == $cc_password) {


                    session_start();
                    $_SESSION["username"] = $cc_username;

                    if ( $row['userType'] == 'T' ) {
                        echo "<script>
            window.location.href='engineerDash.php';
            alert('Successfully Logged In');
            </script>";

                    }

                    if ( $row['userType'] == 'B' ) {
                        echo "<script>
            window.location.href='userDashboard.php';
            alert('Successfully Logged In');
            </script>";

                    }


                } else

                    echo "<script>
            window.location.href='userLogin.php';
            alert('ERROR PLEASE ENTER A CORRECT USERNAME AND PASSWORD');
            </script>";


            }


        }

        else echo "<script>
            window.location.href='userLogin.php';
            alert('ERROR PLEASE ENTER A CORRECT USERNAME AND PASSWORD');
            </script>";



    }

}

?>




