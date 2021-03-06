<?php
session_start();
if(!isset($_SESSION['username']))
{
// not logged in
    header('Location: userLogin.php');
    exit();
}
?>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/formStyler.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!------ Include the above in your HEAD tag ---------->
<?php
$pageName = "New Engineer Ticket"
?>
    <div class ="bannerDiv">
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand visible-xs">
                        <img width="20" height="20"
                             src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC" alt="Brand">
                    </a>
                    <a href="engineerDash.php" class="navbar-brand hidden-xs" align>Kilwaughter IT HELP-DESK &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $pageName?>
                    </a>
                </div>

                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="navbar-right nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-fw fa-bell-o"></i> <?php echo $_SESSION['username']?>  <span class="badge">1</span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a class="animate" href="logout.php">Logout</a></li>
                            </ul>
                        </li>


                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" class="navbar-link">Menu<span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a class="animate" href="engineerDash.php">Dashboard</a></li>
                                <li class="active"><a class="animate" href="engineerTicket.php">Log Ticket</a></li>
                                <li><a class="animate" href="contactDetails.php">Helpdesk Contact Details</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">Reports</li>
                                <li><a class="animate" href="reporting.php">System Reports</a></li>
                                <li><a class="animate" href="dynamicReport.php">Custom Report Tool</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="dropdown-header">User Settings</li>
                                <li><a class="animate" href="userPassword.php">Change password</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid content"></div>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/formStyler.css" rel="stylesheet">

    <head xmlns="http://www.w3.org/1999/html">

        <title>Title</title>
    </head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/formStyler.css" rel="stylesheet">
<?php
?>

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

$query1 = "SELECT * FROM faulttypes";
$result1 = mysqli_query($conn,$query1);
$query2 = "SELECT * FROM faulttypes";
$result2 = mysqli_query($conn,$query2);
$query3 = "SELECT * FROM faultsubtypes";
$result3 = mysqli_query($conn,$query3);
$query4 = "SELECT * FROM faultsubtypes";
$result4 = mysqli_query($conn,$query4);
$query5 = "SELECT * FROM users where userType ='T'";
$result5 = mysqli_query($conn,$query5);
$query6 = "SELECT * FROM priority";
$result6 = mysqli_query($conn,$query6);
$query7 = "SELECT * FROM status";
$result7 = mysqli_query($conn,$query7);
$query8 = "SELECT * FROM users where userType ='B'";
$result8 = mysqli_query($conn,$query8);

$currentDateTime = date('Y-m-d H:i:s');

//error_reporting(0)
?>

    <body>
    <div align="center">
        <div>
            <div class="form-group">
                <div id="formContainer">
                    <div id="form1">
                        <form action="engineerTicket.php" method="get" display: inline-block>

                            <div class="form-group">

                                <div align="left" class="rounded">



                                    Requester <select name = "requester" required style="width: 19%;"/><option value="SELECT" " selected disabled hidden>--SELECT--</option><?PHP while ($row = mysqli_fetch_array($result8)):;?> <option value="<?php echo $row[2];?>"> <?php echo $row[2];?></option> <?php endwhile;?></select>
                                    Subject <input type="text" name="subject" required style="width: 35%"/>
                                    Priority <select name = "priority" required style="width: 15%;"/><option value="SELECT" " selected disabled hidden>--SELECT--</option><?PHP while ($row = mysqli_fetch_array($result6)):;?> <option value="<?php echo $row[1];?>"> <?php echo $row[1];?></option> <?php endwhile;?></select>
                                    Status <select name="status" required style="width: 13%;" /><option value="SELECT" " selected disabled hidden>--SELECT--</option><?PHP while ($row = mysqli_fetch_array($result7)):;?> <option value="<?php echo $row[1];?>"> <?php echo $row[1];?></option> <?php endwhile;?></select>



                                </div>
                            </div>

                            <div id="formContainer3">
                                <div2 id="formContainer2">

                                    <section class="container">

                                        <div class="left-half">
                                            <article>
                                                TICKET NUMBER<input type="text" class="form-control" required style="width: 350px" name="ticketNumber" value="--TO BE GENERATED--" readonly="true"/><br>
                                                Description of Issue (Max 255 Characters)*<textarea class="form-control" NAME="description" rows="16" textarea maxlength="255" required style="width: 350px"></textarea><br>
                                            </article>

                                        </div>

                                        <div class="right-half">
                                            <article>
                                                Ticket Type <select name = "type" required style="width: 350px" class="form-control"/><option value="type" selected disabled hidden>--SELECT--</option><?PHP while ($row = mysqli_fetch_array($result2)):;?> <option value="<?php echo $row[1];?>"> <?php echo $row[1];?></option> <?php endwhile;?></select><br>
                                                Sub-Type <select name = "subType" required style="width: 350px" class="form-control"/><option value="subType" selected disabled hidden>--SELECT--</option><?PHP while ($row = mysqli_fetch_array($result4)):;?> <option value="<?php echo $row[2];?>"> <?php echo $row[2];?></option> <?php endwhile;?></select><br>
                                                Assigned Technician <select name = "assignedTech" required style="width: 350px" class="form-control"/><option value="technician" selected disabled hidden>--SELECT--</option><?PHP while ($row = mysqli_fetch_array($result5)):;?> <option value="<?php echo $row[2];?>"> <?php echo $row[2];?></option> <?php endwhile;?></select><br>
                                                Date logged<input type="text" class="form-control" name="t" required style="width: 350px" readonly/><br>
                                                Expected Completion Date<input type="text" class="form-control" name="t" required style="width: 350px" readonly/><br>
                                                Last Edited<input type="text" class="form-control" name="t" required style="width: 350px" readonly/>
                                            </article>



                                        </div>

                                    </section>



                                </div2>
                                <Br><Br>
                                <input type="submit" class="btn btn-primary" name="sbmtTicket" value="Log My Ticket!" />
                                <Br><Br>
                            </div>

                        </form>


                    </div>
                </div>

            </div>

    </body>


    </html>



<?php

if(isset($_GET['sbmtTicket'])) {

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

    $requester = $_GET['requester'];
    $subject = $_GET['subject'];
    $priority = $_GET['priority'];
    $status = $_GET['status'];
    $description = $_GET['description'];
    $type = $_GET['type'];
    $subType = $_GET['subType'];
    $assignedTech = $_GET['assignedTech'];

    $sql = "INSERT INTO ticket (username,subject,description,ticketStatus,assignedTechnician,ticketType,issueType,issueSubType)
            VALUES ('$requester','$subject','$description','$status','$assignedTech','$priority','$type','$subType')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>
            window.location.href='NewEngineerTicket.php';
             alert('Ticket Successfully logged, generating Ticket Number...');
            </script>";

    } else {


        echo "<script>
            window.location.href='engineerTicket.php';
            alert('ERROR LOGGING TICKET - DATABASE COULD NOT INSERT');
            </script>";
    }

    $conn->close();


}

?>