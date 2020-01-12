<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Success</title>
    <link rel="icon" href="images/logo.jpg">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<hr>
<div class="logo">
    <img src="images/logo.jpg" alt="Logo" width="150" height="150">
</div>
<hr>
<div class="heading">
    <h3 class="text-center">Update Success</h3>
</div>
<hr>
<div class="container">
    <?php
    $conn=mysqli_connect("localhost","root","","jackDb");
    if (!$conn){
        die("Connection Error : " . mysqli_connect_error());
    }
    $staffID=mysqli_real_escape_string($conn,$_POST['staffID']);
    $idPass=mysqli_real_escape_string($conn,$_POST['idPassNo']);
    $firstName=mysqli_real_escape_string($conn,$_POST['fName']);
    $middleName=mysqli_real_escape_string($conn,$_POST['mName']);
    $lastName=mysqli_real_escape_string($conn,$_POST['lName']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    $position=mysqli_real_escape_string($conn,$_POST['position']);
    $department=mysqli_real_escape_string($conn,$_POST['department']);
    $joinDate=mysqli_real_escape_string($conn,$_POST['joinDate']);
    $sql="UPDATE `staffDetails` SET `staff_id`='$staffID',`first_name`='$firstName',`middle_name`='$middleName',`last_name`='$lastName',`gender`='$gender',`position`='$position',`department`='$department',`join_date`='$joinDate' WHERE `idPass_Number`='$idPass'";
    if ($conn->query($sql)==true){
        print "<p>Staff Details Updated Successfully.</p>";
        print "<a href='staffDetails.php' class='btn btn-primary'>Update Another Staff Details</a>";
    }
    else{
        print "<p>Staff details not updated.</p>";
        print "<a href='staffDetails.php' class='btn btn-danger'>Try Again</a>";
    }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>