<?php
session_start();
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
    $result5 = mysqli_query($conn, $query5);
    $rowzz = mysqli_fetch_array($result5);
    $type = $rowzz['userType'];   //Engineer or Business user?

    if ($type == 'T') {

        $redirect = "engineerDash.php";
    }

    if ($type == 'B') {

        $redirect = "userDashboard.php";
    }

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
$pageName = "Custom Report Tool"
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
                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $pageName?>
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
                                <li><a class="animate" href="reporting.php">System Reports</a></li>
                                <li class="active"><a class="animate" href="dynamicReport.php">Custom Report Tool</a></li>
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





<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<body>
<form action="dynamicReport.php" method="get" display: inline-block>
    <div align="center">
        <h4>Please select the below fields to customise your Ticket Report</h4><Br>
        Chart Type <select name = "chartType" required style="width: 350px" value class="form-control">
            <option value="HIDDEN" selected disabled hidden>--SELECT--</option>
            <option value="bar">Bar Chart</option>
            <option value="pie">Pie Chart</option>
            <option value="donut">Donut Chart</option>
            <option value="horizontal">Horizontal Chart</option>
        </select><br>
        Report Data <select name = "reportType" required style="width: 350px" value class="form-control">
            <option value="HIDDEN" selected disabled hidden>--SELECT--</option>
            <option value="Issue-Type">Issue/Request Type</option>
            <option value="Ticket-Status">Ticket Status</option>
            <option value="Ticket-Type">Ticket Type</option>
            <option value="User-Logged">User Logged</option>
        </select><br>
        Title of Report <input class="form-control" type="text" name="title" required style="width: 350px"/><br>
        <input type="submit" class="btn btn-primary"  name="sbmt" value="Generate Report" /> <button class="btn btn-primary" onClick="window.print()">Print Report</button><Br><Br>
    </div>
</form>

</body>

<?php
if(isset($_GET['sbmt'])) {

$chartType = $_GET['chartType'];
$reportType = $_GET['reportType'];
$title = $_GET['title'];

if ($reportType == "Ticket-Status") {

    $sqlSearcher = "ticketStatus";
}                                                                       //setting variables that change subjective to the chart type


if ($reportType == "Ticket-Type") {

    $sqlSearcher = "ticketType";
}


if ($reportType == "Issue-Type") {

    $sqlSearcher = "issueType";
}


if ($reportType == "User-Logged") {

    $sqlSearcher = "username";
};


if ($chartType == "bar") {

$chart = "bar";
$chart2 = "Bar";
$chart3 = "charts";
}
if ($chartType == "pie") {

    $chart = "corechart";
    $chart2 = "PieChart";
    $chart3 = "visualization";

}

if ($chartType == "horizontal") {

    $chart = "bar";
    $chart2 = "Bar";
    $chart3 = "charts";

}

if ($chartType == "donut") {

    $chart = "corechart";
    $chart2 = "PieChart";
    $chart3 = "visualization";
}



if(isset($_GET['sbmt'])) {

?>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages': ['<?php echo "$chart";?>']});
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
                ['<?php echo "$reportType";?>', 'Tickets'],
                <?php

                $sql99 = "SELECT $sqlSearcher, count(*) FROM ticket GROUP by $sqlSearcher";     //Chart drawing functions with different variables initialised
                $result99 = $conn->query($sql99);
                $row99 = mysqli_fetch_assoc($result99);

                while ($row99 = mysqli_fetch_array($result99)) {

                    echo "['".$row99[0]."',".$row99[1]."],";
                }?>
            ]);

            var options = {

                <?php

                if ($chartType == "bar") {

                    echo "chart: {
                    title: '',
                    subtitle: '',
                }";

                }

                else if ($chartType == "pie") {

                    echo "title: '$title'";

                }

                else if ($chartType == "donut") {

                    echo "title: '$title',
                    pieHole: 0.4,";

                }

                else if ($chartType == "horizontal") {

                    echo "chart: {
                    title: '',
                    subtitle: '',
                }, bars: 'horizontal',";

                }


                else echo "ERROR GENERATING CHART";


                ?>
            };



            var chart = new google.<?php echo "$chart3";?>.<?php echo "$chart2";?>(document.getElementById('chart'));

            <?php

            if ($chart == "bar") {

                echo "chart.draw(data, google.charts.$chart2.convertOptions(options));";

            }

            else if ($chart == "corechart") {

                echo "chart.draw(data, options);";

            }

            else echo "ERROR GENERATING CHART";


            ?>

        }
    </script>
</head>
<body>
<br>
<div align="center">
    <div id="chart" style="width: 800px; height: 500px;"></div>
</body>

</html>


<?php }

else echo "Error, no correct report select";

}

    ?>