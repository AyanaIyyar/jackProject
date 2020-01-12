<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Details</title>
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
    <h3 class="text-center">Staff Details</h3>
</div>
<hr>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <form action="newStaffHandler.php" method="post">
                <label for=""><b>ID Number : </b></label>
                <br>
                <input type="text" name="idPassNo" class="form-control" placeholder="* ID/Passport Number Here" required>
                <br>
                <label for=""><b>First Name : </b></label>
                <br>
                <input type="text" name="fName" class="form-control" placeholder="* First Name Here" required>
                <br>
                <label for=""><b>Middle Name : </b></label>
                <br>
                <input type="text" name="mName" class="form-control" placeholder="* Middle Name Here" required>
                <br>
                <label for=""><b>Last Name : </b></label>
                <br>
                <input type="text" name="lName" class="form-control" placeholder="* Last Name Here" required>
                <br>
                <label for=""><b>Gender : </b></label>
                <br>
                <input type="radio" name="gender" value="Male" required>&nbsp;Male
                <input type="radio" name="gender" value="Female" required>&nbsp;Female
                <br>
                <label for=""><b>Position : </b></label>
                <br>
                <input type="text" name="position" class="form-control" placeholder="* Position Here" required>
                <br>
                <label for=""><b>Department : </b></label>
                <br>
                <select name="department" id="" class="form-control" required>
                    <option value="Systems Administrator">Systems Administrator</option>
                    <option value="Administrator">Administrator</option>
                    <option value="Front Office">Front Office</option>
                    <option value="Accounts">Accounts</option>
                    <option value="Management">Management</option>
                </select>
                <br>
                <div class="buttons">
                    <button class="btn btn-success" type="submit">Add New</button>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="searchStaffU.php" class="btn btn-info">Update</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="searchStaffD.php" class="btn btn-danger">Delete</a>
                </div>
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>