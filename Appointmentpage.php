<?php
include('trynew/sidenav.php');
session_start(); 
include "db_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Health</title>
    <link rel="shortcut icon" type="image/png" href="logo3.png">
    <link rel="stylesheet" href="AppointmentPage.css">
    <link rel="stylesheet" href="trynew/sidenav.css">
    <script src="https://kit.fontawesome.com/a2bdf52fb7.js" crossorigin="anonymous"></script> </head>
    <body> 
    <div class="home">
                    <div class="text">Your Appointments</div>
        <table class="tables">
        <thead> 
        <tr>
        <th> Email </th>
        <th> Department </th>
        <th> Doctor </th>
        <th> Date and Time </th>
        <th> Action </th>
        </tr>
        </thead>
       
       <?php
$email = $_SESSION['email'];
$query = "SELECT * from appointment where status = 'approved' && email = '$email'order by date ASC";
$result = mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result)){
?>
<tr>
     

    <td><?php echo $row['email'];?></td>
    <td><?php echo $row['Department'];?></td>
    <td><?php echo $row['Doctor'];?></td>
    <td><?php echo $row['date'];?></td>
    <td>
        <form action = appointmentpage.php method = "POST">
            <input type = "hidden" name="date" value= "<?php echo $row['date'];?>"/>
            <input type = "submit" name="cancel" value= "Cancel"/>
        </form>
        <?php } ?>
</table>
    </div>
 <?php 
if(isset($_POST['cancel'])){
    $date = $_POST['date'];
    $select = "DELETE FROM appointment WHERE date= '$date'";
    $result = mysqli_query($conn, $select);

    echo '<script type = "text/javascript">';
    echo 'alert("Your Appointment is Cancelled ");';
    echo 'window.location.href = "Appointmentpage.php"';
    echo '</script>';
}?>        
    </div> 
    <script src="trynew/sidenav.js"></script>
    </body>
    </html>
    