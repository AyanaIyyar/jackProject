<?php
$conn=mysqli_connect("localhost","root","","jackDb");

if (!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}
$idPass=mysqli_real_escape_string($conn,$_POST['idPassNo']);
$sql="SELECT * FROM staffDetails WHERE idPass_Number='$idPass'";
$result=$conn->query($sql);

if ($result->num_rows > 0)
{
    while ($row=$result->fetch_assoc())
    {
        ?>

        <!doctype html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Update Staff Details</title>
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
            <h3 class="text-center">Update Staff Details</h3>
        </div>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <form action="updateStaff.php" method="post">
                        <label for=""><b>Staff ID : </b></label>
                        <br>
                        <input type="text" name="staffID" class="form-control" required value="<?php print $row['staff_id'];?>">
                        <br>
                        <label for=""><b>ID Number : </b></label>
                        <br>
                        <input type="text" name="idPassNo" class="form-control" placeholder="* ID/Passport Number Here" required value="<?php print $row['idPass_Number'];?>">
                        <br>
                        <label for=""><b>First Name : </b></label>
                        <br>
                        <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required value="<?php print $row['first_name'];?>">
                        <br>
                        <label for=""><b>Middle Name : </b></label>
                        <br>
                        <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required value="<?php print $row['middle_name'];?>">
                        <br>
                        <label for=""><b>Last Name : </b></label>
                        <br>
                        <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required value="<?php print $row['last_name'];?>">
                        <br>
                        <label for=""><b>Gender : </b></label>
                        <br>
                        <input type="text" name="gender" class="form-control" required value="<?php print $row['gender'];?>">
                        <br>
                        <label for=""><b>Position : </b></label>
                        <br>
                        <input type="text" name="position" class="form-control" placeholder="* Position Here" required value="<?php print $row['position'];?>">
                        <br>
                        <label for=""><b>Department : </b></label>
                        <br>
                        <input type="text" name="department" class="form-control" required value="<?php print $row['department'];?>">
                        <br>
                        <label for=""><b>Join Date : </b></label>
                        <br>
                        <input type="text" name="joinDate" class="form-control" required value="<?php print $row['join_date'];?>">
                        <br>
                        <div class="buttons">
                            <button class="btn btn-warning" type="submit">Update</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        </body>
        </html>

        <?php
    }
}
mysqli_close($conn);
?>