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
if(!isset($_SESSION['username']))
{
// not logged in
    header('Location: userLogin.php');
    exit();
}
$pageName = "Help-Desk Contact Details";
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
                <a href="userDashboard.php" class="navbar-brand hidden-xs" align>Kilwaughter IT HELP-DESK &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $pageName?>
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
                            <li><a class="animate" href="userDashboard.php">Dashboard</a></li>
                            <li><a class="animate" href="businessTicket.php">Log Ticket</a></li>
                            <li><a class="animate" href="closedUserTickets.php">My Resolved Tickets</a></li>
                            <li class="active"><a class="animate" href="contactDetails.php">Helpdesk Contact Details</a></li>
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

<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="css/formStyler.css" rel="stylesheet">

<body>
<Br>
<div align="center"><Br><Br>
    <img src="images/Kilwaughter.jpeg" alt="HTML Letters">
    <Br><Br>
<h4>The IT Helpdesk is available to call at the following times;</h4><br>
    Monday - Thursday 8am-5pm<Br>
    Friday 8am - 3pm<Br><Br>
    Landline - 02890281574<br>
    Extension - (Internal) EXT3402<bR>
    Mobile &nbsp&nbsp&nbsp- 07703982488<Br><Br><Br>
    <b>Email - ITsupport@kilwaughter.com<b>
            <Br><Br><Br>
            Please note these times may vary during holiday periods

</div>


</body>
