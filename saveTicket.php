<?php

if (isset($_GET['sbmtTicket2'])) {

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
    $noteType = $_GET['noteType'];
    $notes = $_GET['notes'];
    $ticket = $_GET['ticketNumber'];
    $dateLogged = $_GET['dateLogged'];
    $date = gmdate('Y-m-d H:i:s', time());

    $sqler = "select * from priority where priorityLevel='$priority'";
    $result99 = mysqli_query($conn,$sqler);
    $rowz = mysqli_fetch_array($result99);
    $final = $rowz['sla'];
    $intFinal = (int)$final;


    $sql = "update ticket set username='$requester',subject='$subject',description='$description',ticketStatus='$status',assignedTechnician='$assignedTech',ticketType='$priority',issueType='$type',issueSubtype='$subType',lastEditedTime='$date' where ticketId ='$ticket'";




    if ($conn->query($sql) === TRUE) {


        echo "<script>
    window.location.href='engineerDash.php';
    alert('Successfully Saved Ticked');
</script>";

        if (!empty($notes)) {

            $sql2 = "insert into notes (ticketid,userVisible,note) values ('$ticket','$noteType','$notes') ";

            if ($conn->query($sql2) === TRUE) {

                echo "<script>
    window.location.href='engineerDash.php';
    alert('Successfully Saved Ticked');
</script>";

            }

            else {

                echo "<script>
    window.location.href='engineerDash.php';
    alert('ERROR LOGGING TICKET - DATABASE COULD NOT INSERT');
</script>";
            }
        }

    } else {


        echo "<script>
    window.location.href='engineerDash.php';
    alert('ERROR LOGGING TICKET - DATABASE COULD NOT INSERT');
</script>";
    }

}

?>

<?php


if (isset($_GET['sbmtTicket3'])) {

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
    $noteType = $_GET['noteType'];
    $notes = $_GET['notes'];
    $ticket = $_GET['ticketNumber'];
    $dateLogged = $_GET['dateLogged'];
    $date = gmdate('Y-m-d H:i:s', time());

    $sqler = "select * from priority where priorityLevel='$priority'";
    $result99 = mysqli_query($conn,$sqler);
    $rowz = mysqli_fetch_array($result99);
    $final = $rowz['sla'];
    $intFinal = (int)$final;


    $sql = "update ticket set username='$requester',subject='$subject',description='$description',ticketStatus='$status',assignedTechnician='$assignedTech',ticketType='$priority',issueType='$type',issueSubtype='$subType',lastEditedTime='$date' where ticketId ='$ticket'";




    if ($conn->query($sql) === TRUE) {


        echo "<script>
    window.location.href='engineerDash.php';
    alert('Ticket Resolved - Please inform the tickets requester via email or phone.');
</script>";

        if (!empty($notes)) {

            $sql2 = "insert into notes (ticketid,userVisible,note) values ('$ticket','$noteType','$notes') ";

            if ($conn->query($sql2) === TRUE) {

                echo "<script>
    window.location.href='engineerDash.php';
    alert('Ticket Resolved - Please inform the tickets requester via email or phone.');
</script>";

            }

            else {

                echo "<script>
    window.location.href='engineerDash.php';
    alert('ERROR RESOLVING TICKET - DATABASE COULD NOT INSERT');
</script>";
            }
        }

    } else {


        echo "<script>
    window.location.href='engineerDash.php';
    alert('ERROR RESOLVING TICKET - DATABASE COULD NOT INSERT');
</script>";
    }

}

?>
