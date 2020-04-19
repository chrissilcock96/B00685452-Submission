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

$query1 = "SELECT * FROM priority ORDER BY id ASC";
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



        <h1>Edit Priority Details<br></B></h1>
        <br>
        <form action="editPriority.php" method="get" display: inline-block>
            Select Priority ID <select name = selectPriority>
                <?PHP

                while ($row = mysqli_fetch_array($result1)):;?>
                    <option value="<?php echo $row[0];?>">
                        <?php echo $row[0];?></option>
                <?php endwhile;?>
            </select>
            <br>
            <br>
            <input type="submit" name="sbmt2" value="Find Priority" />
            <input type="submit" name="sbmt" value="         Add          " />
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

$cc_productID = $_GET['selectPriority'];

$sql = "select * from priority where id = '$cc_productID'";

$result3 = mysqli_query($conn, $sql);


if ($result3->num_rows > 0) {    // output data of each row

while ($row = $result3->fetch_assoc()) {

?>
<br>
<div align="center">
    <div class="fadeInDown">
        <div id="formContent">
            <form action="editedPriority.php" method="get" display: inline-block>
                <br>
                Priority ID<input type="text" name="id" readonly="T" required value="<?php echo $row['id'] ?>"/><br>
                <Br>
                Priority Level<input type="text" name="name" inputmode="F" required
                                     value="<?php echo $row['priorityLevel'] ?>"/>
                <Br>
                Default SLA (Days) <input type="number" name="sla" inputmode="F" required
                                     value="<?php echo $row['sla'] ?>"/><br> <Br>
                <Br>

                <input type="submit" name="sbmt5" value="Submit Edited Details"/>
            </form>

            <?php

            }
            }

            }

///////////////////////////////////////////////////////////////////////////////
            ?>

            <?php

            if(isset($_GET['sbmt'])) { ?>

<br>
<div align="center">
    <div class="fadeInDown">
        <div id="formContent">
            <form action="addPriority.php" method="get" display: inline-block>
                <br>
                <Br>
                New Priority Level<input type="text" name="newPriority" inputmode="F" required
                                     value="<?php echo $row['priorityLevel'] ?>"/><br> <Br>
                <Br>
                Default SLA (Days)<input type="number" name="newSla" inputmode="F" required
                                         value="<?php echo $row['sla'] ?>"/><br> <Br>
                <Br>

                <input type="submit" name="sbmtFin" value="Add new Priority"/>
            </form>

            <?php
            }






