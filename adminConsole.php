<?PHP
session_start();
if(!isset($_SESSION['username']))
{
// not logged in
header('Location: userLogin.php');
exit();
}

?>
<html>

<body>


<head><title>Admin Console</title></head>
<link href="css/custom-css.css" rel="stylesheet" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

<div align="center">
    <div class="wrapper fadeInDown">
        <div id="formContent">


        <h1>Administrators Console<br></B></h1>
        <br><br>
        <h4>Please select which operation you need..</h4>
        <br>
        <form>


            <a href='types.php'><input type="button" name="reg" value="Add/Edit Types"style="width: 350px"/></a>
            <a href='subType.php'><input type="button" name="reg" value="Add/Edit Subtypes"style="width: 350px"/></a>
            <a href='editPriority.php'><input type="button" name="display" value="Add/Edit Priorities"style="width: 350px" /></a>
            <a href='userSettings.php'><input type="button" name="edit" value="Add/Edit Users"style="width: 350px" /></a>
            <a href='resetPassword.php'><input type="button" name="edit" value="Reset User Password"style="width: 350px" /></a>
            <br><Br>
            <a href='engineerDash.php'><input type="button" name="logout" value="Return to Engineer Dash"style="width: 350px" /><Br><br></a>
        </form>
        </body>
    </div>
</div>


</html>