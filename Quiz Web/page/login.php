<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    /> -->

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .Border {
            
            padding: 8%;
            margin: 8% auto;
            border-radius:  15px;
            border: 0.5px solid;
            font-size: 20px;
            background-color: #D6EAF8;
            text-align: center;
        }
    </style>
</head>

<body style="font-family: 'Times New Roman', Times, serif;">

    <form class="row g-3 needs-validation" novalidate method="post">
        <div class="Border text-center">
            <div class="container">
                <h1 style="text-align: center;"> Login</h1>
                <div class="form-row">
                    <label for="username">Username</label>
                    <input class="form-control" type="text" name="Username" id="Username" placeholder="Username"
                        required>
                    <div class="invalid-feedback">
                        Please enter your username.
                    </div>
                </div>
                <div class="form-row">
                    <label for="Password">Password</label>
                    <input class="form-control" type="password" name="Password" id="Password" placeholder="Password"
                        required>
                    <div class="invalid-feedback">
                        Please enter your password.
                    </div>
                </div>
                <div class="form-check">
                    <div>
                        <input type="checkbox" checked>
                        <label class="form-check-label" style="padding: 20px;" aria-checked="true">Remember me </label>
                        <a href="#" name="forgetpassword" class="forgetpassword">For get password</a>
                    </div>
                </div>
                <br>

                <div class="form-group text-center">
                    <div class="border-radius">
                        <button type="submit" class="btn border border-primary p-1 mb-2 bg-primary text-white col-12"
                            style="width: 130px;">Login</button>
                        <div class="invalid-feedback">
                        </div>
                        <div><a href="loginAdmin.php" name="loginadmin">Login admin</a></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener(
                "submit",
                function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>
<?php
        require "connect.php";
        $user = "";
        $pass = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["Username"])){
                $user = $_POST["Username"];
            }
            if (isset($_POST["Password"])){
                $pass = $_POST["Password"];
            }
            try { 
                $sql = "select user_name, password from student
                where user_name = '$user' and password = '$pass'";
                $result = mysqli_query($conn, $sql);
                $count = mysqli_num_rows($result);
                if($count == 0){
                    alert("Tài khoản hoặc mật khẩu không đúng");
                    ?>
                    <?php 
                }
                else{
                    ?>
                    <script> 
                        window.location.href = "../page/student/List_Exam_student.php";
                    </script>
                    <?php 
                }
            }catch (mysqli_sql_exception $e) { 
                var_dump($e);
                exit; 
            }  
        }
        function alert($msg) {
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }
    ?>
</html>