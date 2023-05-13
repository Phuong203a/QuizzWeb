<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Student</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&family=Ultra&family=Yeseva+One&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
</script>
<style>
</style>

<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#D6EAF8 ">
    <a class="navbar-brand text-primary" href="student_management.php" style="font-family: 'Yeseva One', cursive;font-size:23px;"><img
            src="/image/go-back-arrow.png" width="40px" style="margin: 20px;">Go back</a>
</nav>


<body style="font-family: 'Times New Roman', Times, serif;">
    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header p-3 mb-2 " style="background-color:#D6EAF8 ">Profile Picture</div>
                    <div class="card-body text-center">
                        <img style="width:100%;" class="img-account-profile rounded-circle mb-2"
                            src="https://media.istockphoto.com/id/1200064810/vi/vec-to/n%C3%BAt-%C4%91%C4%83ng-nh%E1%BA%ADp-h%E1%BB%93-s%C6%A1-ng%C6%B0%E1%BB%9Di-d%C3%B9ng-ho%E1%BA%B7c-n%C3%BAt-bi%E1%BB%83u-t%C6%B0%E1%BB%A3ng-x%C3%A1c-th%E1%BB%B1c-truy-c%E1%BA%ADp-m%E1%BB%8Di-ng%C6%B0%E1%BB%9Di-t%C3%A0i-kho%E1%BA%A3n.jpg?s=612x612&w=is&k=20&c=3yqYr-X75GJ0LxJ6t-x5wbEmNvevIwJ86d9SQES1-dk="
                            alt="">
                        <button class="btn btn-primary" type="button">Upload</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8" style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header p-3 mb-2" style="background-color:#D6EAF8 ">Account Details</div>
                    <div class="card-body">
                        <form method="post">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <input class="form-control" name="inputUsername" type="text"
                                    placeholder="Enter your username">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPassword">Password</label>
                                <input class="form-control" name="password" type="password"
                                    placeholder="Enter your Password">
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPassword">Re password</label>
                                <input class="form-control" name="Repassword" type="password"
                                    placeholder="Re enter Password">
                            </div>
                            <!-- Form Group (username)-->
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" name="inputFirstName" type="text"
                                        placeholder="Enter your first name" value="Trần">
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" name="inputLastName" type="text"
                                        placeholder="Enter your last name" value="An">
                                </div>
                            </div>
                            <div style="font-size: 18px;">
                                <label for="Gender;">Gender:</label>
                                <div class="form-check form-check-inline" style="margin:10px 50px ;">
                                    <label class="form-check-lable">
                                        <input type="radio" class="form-check-input" name="optradio" value="Male">Male
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-lable">
                                        <input type="radio" class="form-check-input" name="optradio" value="Female">Female
                                </div>
                            </div>

                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">MSSV</label>
                                    <input class="form-control" name="inputOrgName" type="text"
                                        placeholder="Enter your MSSV" value="52100834">
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputBirthday">Birthday</label>
                                    <input class="form-control" name="inputBirthday" type="text" name="birthday"
                                        placeholder="Enter your birthday" value="Birthday">
                                </div>
                            </div>
                            <!-- Form Group (email address)-->

                            <!-- Form Group (phone number)-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" name="inputPhone" type="tel"
                                    placeholder="Enter your phone number" value="0123456789">
                            </div>
                            <!-- Form Group (birthday)-->

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" name="inputEmailAddress" type="email"
                                    placeholder="Enter your email address" value="An@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="col-md-6" for="inputLocation">Address</label>
                                <input class="form-control" name="inputLocation" type="text"
                                    placeholder="Enter your location" value="24-Nguyễn Đình Chiểu-Nha Trang">
                            </div>

                            </label><br>
                            <!-- Form Row-->

                            <!-- Save changes button-->
                            <button class=" btn btn-primary" type="submit">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <?php
        require "../connect.php";
        $inputUn = "";
        $pass = "";
        $fname = "";
        $lname = "";
        $gen = ""; 
        $orgname = "";
        $birth= "";
        $phone = "";
        $email = "";
        $adr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["inputUsername"])){
                $inputUn = $_POST["inputUsername"];
            }
            if (isset($_POST["password"])){
                $pass = $_POST["password"];
            }
            if (isset($_POST["inputFirstName"])){
                $fname = $_POST["inputFirstName"];
            }
            if (isset($_POST["inputLastName"])){
                $lname = $_POST["inputLastName"];
            }
            if (isset($_POST["optradio"])){
                $gen = $_POST["optradio"];
                if ($gen == "Female")
                    $gen = 1;
                if ($gen == "Male")
                    $gen = 0;
            }
            if (isset($_POST["inputOrgName"])){
                $orgname = $_POST["inputOrgName"];
            }
            if (isset($_POST["Birthday"])){
                $birth = $_POST["Birthday"];
            }
            if (isset($_POST["inputPhone"])){
                $phone = $_POST["inputPhone"];
            }
            if (isset($_POST["inputEmailAddress"])){
                $email = $_POST["inputEmailAddress"];
            }
            if (isset($_POST["inputLocation"])){
                $adr = $_POST["inputLocation"];
            }
            if (isset($_POST["Repassword"])){
                $repass = $_POST["Repassword"];
                if($repass != $pass)
                    alert("Mật khẩu không khớp");
                else{
                    try { 
                        $sql = "insert into quiz_web.student 
                        (user_name, password, first_name, last_name, gender, student_id, date_of_birth, phone_number, email, address, class_id, major_id) 
                        VALUES ('$inputUn' ,'$pass','$fname','$lname','$gen', '$orgname','$birth','$phone', '$email','$adr','1','2')";
                        $result = mysqli_query($conn, $sql);
                    }catch (mysqli_sql_exception $e) { 
                        var_dump($e);
                        exit; 
                    } 
                }
            }  
        }
        function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    ?>
</body>
</html>