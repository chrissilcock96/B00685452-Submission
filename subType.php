<?PHP

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

$query1 = "SELECT * FROM faultsubtypes ORDER BY id ASC";
$result1 = mysqli_query($conn,$query1);
error_reporting(0)
?>

    <body>

    <head><title>Form</title></head>
    <link href="css/custom-css.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <br><br><br><br><br>
    <div align="center">
        <div id="formContent">

            <style>
                a {
                    text-decoration: none;
                    display: inline-block;
                    padding: 8px 16px;
                }

                a:hover {
                    background-color: #ddd;
                    color: black;
                }

                .previous {
                    background-color: #4CAF50;
                    color: black;
                }

                .next {
                    background-color: #4CAF50;
                    color: white;
                }

                .round {
                    border-radius: 50%;
                }

            </style>
            <div align="center">
                <Br><a href="adminConsole.php" class="previous round">&#8249;</a><br>
            </div>



            <h1>Edit SubType Details<br></B></h1>
            <br>
            <form action="subType.php" method="get" display: inline-block>
                Select  <select name = selectTypeID>
                    <?PHP

                    while ($row = mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row[0];?>">
                            <?php echo $row[0];?></option>
                    <?php endwhile;?>
                </select>
                <br>
                <br>
                <input type="submit" name="sbmt2" value="Find SubType" />
                <input type="submit" name="sbmt" value=" Add SubType " />
            </form>

    </body>
    </div>
    </div>
    </div>

<?php

if(isset($_GET['sbmt2'])) {

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

    $cc_productID = $_GET['selectTypeID'];

    $sql = "select * from faultsubtypes where id = '$cc_productID'";

    $result3 = mysqli_query($conn, $sql);


    if ($result3->num_rows > 0) {    // output data of each row

        while ($row = $result3->fetch_assoc()) {

            ?>
            <br>
            <div align="center">
            <div class="fadeInDown">
            <div id="formContent">
            <form action="editSubtype.php" method="get" display: inline-block>
                <br>
                SubType ID <input type="text" name="id" readonly="T" required value="<?php echo $row['id'] ?>"/><br>
                <Br>
                Parent Type Name <input type="text" name="name" inputmode="F" required
                                value="<?php echo $row['faultType'] ?>"/>
                <br><br>

                Sub type Name<input type="text" name="name2" inputmode="F" required
                                       value="<?php echo $row['faultSubtype'] ?>"/>
                <br><Br>
                <input type="submit" name="sbmt5" value="Submit Edited Details"/>
            </form>

            <?php

        }
    }

}

///////////////////////////////////////////////////////////////////////////////
?>

<?php

$query10 = "SELECT * FROM faulttypes ORDER BY id ASC";
$result10 = mysqli_query($conn,$query10);

if(isset($_GET['sbmt'])) { ?>



    <br>
    <div align="center">
    <div class="fadeInDown">
    <div id="formContent">
    <form action="addSubType.php" method="get" display: inline-block>
        <br>
        <Br>
        Parent Type  <div class = "custom-select"> <select name = selectType>
            <?PHP

            while ($row = mysqli_fetch_array($result10)):;?>
                <option value="<?php echo $row[1];?>">
                    <?php echo $row[1];?></option>
            <?php endwhile;?>
            </select></div>

        <br><br>
        Sub type Name<input type="text" name="name2" inputmode="F" required
                            value="<?php echo $row['faultSubtype'] ?>"/>
        <Br>
        <input type="submit" name="sbmtFin" value="Add new Fault Type"/>
    </form>

    <?php
}






