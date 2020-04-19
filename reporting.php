<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="css/formStyler.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!------ Include the above in your HEAD tag ---------->
<?php
session_start();
$pageName = "System Reports";
if(!isset($_SESSION['username']))
{
// not logged in
    header('Location: userLogin.php');
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "ithelpdesk";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);
$ticketID =0;

// Check connection
if ($conn->connect_error) {
    die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
}

else {
    $name = $_SESSION['username'];
    $usernameSQL = $_SESSION['username'];
    $query5 = "SELECT * FROM users where username ='$usernameSQL';";
    $result5 = mysqli_query($conn,$query5);
    $rowzz = mysqli_fetch_array($result5);
    $type = $rowzz['userType'];

    if ($type == 'T') {

        $redirect = "engineerDash.php";
    }

    if ($type == 'B') {

        $redirect = "userDashboard.php";
    }






}
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
                <a href="#" class="navbar-brand hidden-xs" align>Kilwaughter IT HELP-DESK &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <?php echo $pageName?>
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
                            <li><a class="animate" href="<?php echo $redirect?>">Dashboard</a></li>
                            <li><a class="animate" href="engineerTicket.php">Log Ticket</a></li>
                            <li><a class="animate" href="contactDetails.php">Helpdesk Contact Details</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Reports</li>
                            <li class="active"><a class="animate" href="reporting.php">System Reports</a></li>
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

<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
<form action="reporting.php" method="get" display: inline-block>
    <div align="center">
        <h4>Select System Report:</h4><Br>
        Report Name <select name = "report" required style="width: 350px" value class="form-control">
            <option value="HIDDEN" selected disabled hidden>--SELECT--</option>
            <option value="issueType">Tickets by Issue/Request Type</option>
            <option value="ticketByYear">Tickets by Year (Bar)</option>
            <option value="ticketTypesCurrentYear">Tickets by Ticket Type (Pie)</option>
            <option value="ticketByStatus">Tickets by Status</option>
            <option value="ticketByEngineer">Tickets by Engineer</option>

        </select><br>


        <input type="submit" class="btn btn-primary" name="sbmt" value="Generate Report" /> <button class="btn btn-primary" onClick="window.print()">Print Report</button>
    </div>
</form>
<div>

</body>

<?php

if(isset($_GET['sbmt'])) {

$reportName = $_GET['report'];

if ($reportName == "ticketByYear")

{

?>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['bar']});
        google.charts.setOnLoadCallback(drawChart);

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbName = "ithelpdesk";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbName);

        if ($conn->connect_error) {
            die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
        } else {

            $sql = "SELECT COUNT(*) from ticket where created_at between '2020-01-01' and '2021-01-01';";
            $result = $conn->query($sql);
            $row = mysqli_fetch_assoc($result);
            $size = $row['COUNT(*)'];

            $sql2 = "SELECT COUNT(*) from ticket where created_at between '2019-01-01' and '2020-01-01';";
            $result2 = $conn->query($sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $size2 = $row2['COUNT(*)'];

            $sql3 = "SELECT COUNT(*) from ticket where created_at between '2021-01-01' and '2022-01-01';";
            $result3 = $conn->query($sql3);
            $row3 = mysqli_fetch_assoc($result3);
            $size3 = $row3['COUNT(*)'];

        }; ?>

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Tickets'],
                ['2019',  <?php echo "$size2";?> ],
                ['2020',  <?php echo "$size";?> ],
                ['2021',  <?php echo "$size3";?> ],
            ]);

            var options = {
                chart: {
                    title: 'IT Help-Desk Tickets',
                    subtitle: 'By Year',
                }
            };
            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
</head>
<body>
<br>
<div align="center">
    <div id="columnchart_material" style="width: 800px; height: 500px;"></div>
</body>

</html>

<?php }

else if ($reportName == "ticketTypesCurrentYear") {

    ?>

    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawChart);

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "ithelpdesk";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbName);

            if ($conn->connect_error) {
                die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
            } else {

                $sql = "SELECT COUNT(*) from ticket where ticketType = 'Fault';";
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                $size = $row['COUNT(*)'];

                $sql2 = "SELECT COUNT(*) from ticket where ticketType = 'Works Request';";
                $result2 = $conn->query($sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $size2 = $row2['COUNT(*)'];

                $sql3 = "SELECT COUNT(*) from ticket where ticketType = 'Project';";
                $result3 = $conn->query($sql3);
                $row3 = mysqli_fetch_assoc($result3);
                $size3 = $row3['COUNT(*)'];

                $sql4 = "SELECT COUNT(*) from ticket where ticketType = 'SM Request';";
                $result4 = $conn->query($sql4);
                $row4 = mysqli_fetch_assoc($result4);
                $size4 = $row4['COUNT(*)'];

                $sql5 = "SELECT COUNT(*) from ticket where ticketType = 'Major Fault';";
                $result5 = $conn->query($sql5);
                $row5 = mysqli_fetch_assoc($result5);
                $size5 = $row5['COUNT(*)'];

            }; ?>



            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Ticket Type', 'Tickets'],
                    ['Fault',  <?php echo "$size";?> ],
                    ['Works Request',  <?php echo "$size2";?> ],
                    ['Project',  <?php echo "$size3";?> ],
                    ['SM Request',  <?php echo "$size4";?> ],
                    ['Major Fault',  <?php echo "$size5";?> ],
                ]);

                var options = {
                    chart: {
                        title: 'Tickets by Ticket Type',
                        subtitle: 'Pie Chart',
                    }
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
    <br>
    <div align="center">
        <div id="piechart" style="width: 1100px; height: 650px;"></div>
    </body>

    </html>

<?php }

else if ($reportName == "issueType") {

    ?>


    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "ithelpdesk";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbName);

            if ($conn->connect_error) {
                die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
            } else {

                $sql = "SELECT COUNT(*) from ticket where issueType = 'Hardware';";
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                $size = $row['COUNT(*)'];

                $sql2 = "SELECT COUNT(*) from ticket where issueType = 'Network';";
                $result2 = $conn->query($sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $size2 = $row2['COUNT(*)'];

                $sql3 = "SELECT COUNT(*) from ticket where issueType = 'Production';";
                $result3 = $conn->query($sql3);
                $row3 = mysqli_fetch_assoc($result3);
                $size3 = $row3['COUNT(*)'];

                $sql4 = "SELECT COUNT(*) from ticket where issueType = 'Security';";
                $result4 = $conn->query($sql4);
                $row4 = mysqli_fetch_assoc($result4);
                $size4 = $row4['COUNT(*)'];

                $sql5 = "SELECT COUNT(*) from ticket where issueType = 'Software';";
                $result5 = $conn->query($sql5);
                $row5 = mysqli_fetch_assoc($result5);
                $size5 = $row5['COUNT(*)'];

            }; ?>



            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Issue/Request Type', 'Tickets'],
                    ['Network',  <?php echo "$size";?> ],
                    ['Production',  <?php echo "$size2";?> ],
                    ['Production',  <?php echo "$size3";?> ],
                    ['Security',  <?php echo "$size4";?> ],
                    ['Software',  <?php echo "$size5";?> ],
                ]);

                var options = {
                    title: 'Tickets by Issue/Request Type',
                    pieHole: 0.4,
                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
    <br>
    <div align="center">
        <div id="donutchart" style="width: 900px; height: 500px;"></div>
    </body>

    </html>

<?php }

else if ($reportName == "ticketByStatus") {

    ?>


    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "ithelpdesk";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbName);

            if ($conn->connect_error) {
                die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
            } else {

                $sql = "SELECT COUNT(*) from ticket where ticketStatus = 'UNASSIGNED';";
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                $size = $row['COUNT(*)'];

                $sql2 = "SELECT COUNT(*) from ticket where ticketStatus = 'PENDING';";
                $result2 = $conn->query($sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $size2 = $row2['COUNT(*)'];

                $sql3 = "SELECT COUNT(*) from ticket where ticketStatus = 'RESOLVED';";
                $result3 = $conn->query($sql3);
                $row3 = mysqli_fetch_assoc($result3);
                $size3 = $row3['COUNT(*)'];

                $sql4 = "SELECT COUNT(*) from ticket where ticketStatus = 'ON-HOLD';";
                $result4 = $conn->query($sql4);
                $row4 = mysqli_fetch_assoc($result4);
                $size4 = $row4['COUNT(*)'];

                $sql5 = "SELECT COUNT(*) from ticket where ticketStatus = 'WITHDRAWEN';";
                $result5 = $conn->query($sql5);
                $row5 = mysqli_fetch_assoc($result5);
                $size5 = $row5['COUNT(*)'];

            }; ?>



            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Issue/Request Type', 'Tickets'],
                    ['Unassigned',  <?php echo "$size";?> ],
                    ['Pending',  <?php echo "$size2";?> ],
                    ['Resolved',  <?php echo "$size3";?> ],
                    ['On-Hold',  <?php echo "$size4";?> ],
                    ['Withdrawen',  <?php echo "$size5";?> ],
                ]);

                var options = {
                    title: 'Tickets by current Status',
                    pieHole: 0.4,
                };

                var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
    <br>
    <div align="center">
        <div id="donutchart" style="width: 900px; height: 500px;"></div>
    </body>

    </html>

<?php }

else if ($reportName == "ticketByEngineer") {

    ?>


    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['bar']});
            google.charts.setOnLoadCallback(drawChart);

            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbName = "ithelpdesk";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbName);

            if ($conn->connect_error) {
                die("<br><br><br><br>sConnection to Database Failed: " . $conn->connect_error);
            } else {

                $sql = "SELECT COUNT(*) from ticket where assignedTechnician = 'Christopher Silcock';";
                $result = $conn->query($sql);
                $row = mysqli_fetch_assoc($result);
                $size = $row['COUNT(*)'];

                $sql2 = "SELECT COUNT(*) from ticket where assignedTechnician = 'Barry McNeil';";
                $result2 = $conn->query($sql2);
                $row2 = mysqli_fetch_assoc($result2);
                $size2 = $row2['COUNT(*)'];

                $sql3 = "SELECT COUNT(*) from ticket where assignedTechnician = 'Jon Bonugli';";
                $result3 = $conn->query($sql3);
                $row3 = mysqli_fetch_assoc($result3);
                $size3 = $row3['COUNT(*)'];

                $sql4 = "SELECT COUNT(*) from ticket where assignedTechnician = 'Ziqh Mayberry';";
                $result4 = $conn->query($sql4);
                $row4 = mysqli_fetch_assoc($result4);
                $size4 = $row4['COUNT(*)'];

                $sql5 = "SELECT COUNT(*) from ticket where assignedTechnician = 'Simon Gibson';";
                $result5 = $conn->query($sql5);
                $row5 = mysqli_fetch_assoc($result5);
                $size5 = $row5['COUNT(*)'];

            }; ?>



            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Engineer', 'Tickets'],
                    ['Christopher Silcock',  <?php echo "$size";?> ],
                    ['Barry McNeil',  <?php echo "$size2";?> ],
                    ['Jon Bonugli',  <?php echo "$size3";?> ],
                    ['Ziqh Mayberry',  <?php echo "$size4";?> ],
                    ['Simon Gibson',  <?php echo "$size5";?> ],
                ]);

                var options = {
                    chart: {
                        title: 'Tickets by Engineer',
                        subtitle: 'Bar Chart',
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }

        </script>

    </head>
    <body>
    <br>
    <div align="center">
        <div id="columnchart_material" style="width: 800px; height: 500px;"></div>

    </body>

    </html>


<?php }

else echo "Error, no correct report select";

}

    ?>