<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>History Exam</title>
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
            padding: 6%;
            margin: 4% auto;
            border-radius: 15px;
            border: 0.5px solid;
            font-size: 20px;
            background-color: #D6EAF8;
        }
    </style>
</head>
<nav class="navbar navbar-expand-lg navbar-light "
    style="background-color:#D6EAF8;font-family: 'Times New Roman', Times, serif">
    <a class="navbar-brand " href="#">History Exam</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Exam
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Pre-sessional English 1</a>
                    <a class="dropdown-item" href="#">Pre-sessional English 2</a>
                    <a class="dropdown-item" href="#">System web and mobie</a>
                    <a class="dropdown-item" href="#">Pre-sessional English 2</a>
                </div>
            </li>
        </ul>
    </div>
    </div>
</nav>

<body style="font-family: 'Times New Roman', Times, serif; font-size: 20px;">

    <form class="row g-3 needs-validation" novalidate>
        <div class="Border">
            <div class="container">
                <div style="text-align: center;">
                    <h1 style="color: red"> Kết Quả</h1><br>
                    <h3> Web</h3><br><br>
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label for="Taikhoan">Tài khoản</label>
                        <input class="form-control" type="text" name="TaiKhoan" id="TaiKhoan" value = "123">
                    </div>
                    <div class="col-md-6">
                        <label for="HoTen">Họ & Tên</label>
                        <input class="form-control" type="text" name="HoTen" id="HoTen" value = "123">
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <!-- Form Group (organization name)-->
                    <div class="col-md-6">
                        <?php
                            require "../connect.php";
                            $sql = "select start_time as st FROM test WHERE id = 1";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                $st = $row['st'];
                            }
                        
                            echo '<label for="Time">Thời gian bắt đầu</label>';
                            echo "<input class='form-control' id='time' type='datetime-local' name='time' value = '$st'>";
                        ?>
                    </div>
                    <!-- Form Group (location)-->
                    <!-- <div class="col-md-6"> -->
                    <div class="col-md-6">
                        <?php
                            $sql = "select end_time as et FROM test WHERE id = 1";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                $st = $row['et'];
                            }
                            echo '<label for="TimEnd">Thời gian kết thúc</label>';
                            echo "<input class='form-control' id='time' type='datetime-local' name='time' value = '$st'>";
                        ?>
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <!-- Form Group (organization name)-->
                        <div class="col-md-6">
                            <label for="Score">MSSV</label>
                            <input class="form-control" id="MSSV" type="text" name="MSSV" value = '52100111'>
                        </div>
                    <!-- Form Group (location)-->
                    <div class="col-md-6">
                        <?php
                            $sql = "SELECT *
                            FROM student_answer
                            WHERE id = (SELECT MAX(id) FROM student_answer)";
                            $result = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_array($result))
                            {
                                $st = $row['number_correct_answer'];
                            }
                            echo '<label for="Answer True">Số câu trả lời đúng</label>';
                            echo "<input class='form-control' id='AnswerTrue' type='text' name='AnswerTrue' value = '$st'>";
                        ?>
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <!-- Form Group (organization name)-->
                    <div class="col-md-6">
                        <label for="NotAnswer">Số câu chưa trả lời</label>
                        <input class="form-control" id="NotAnswer" type="text" name="NotAnswer" value = 0>
                    </div>
                    <!-- Form Group (location)-->
                    <div class="col-md-6">
                        <?php
                            $sf = 5 - $st; 
                            echo '<label for="AnswerFalse">Số câu trả lời sai </label>';
                            echo "<input class='form-control' id='AnswerFalse' type='text' name='AnswerFalse' value = '$sf'>"
                        ?>
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <?php
                            $total = $st/5 * 10;
                            echo '<label for="Score">Điểm</label>';
                            echo "<input class='form-control' id='Score' type='text' name='Score' value = '$total'>";
                        ?>
                    </div>
                    <div class="col-md-6">
                        <label for="SumQuestion">Tổng số câu hỏi</label>
                        <input class="form-control" id="SumQuestion" type="text" name="SumQuestion" value = 5>
                    </div>
                </div>
            </div>
    </form>
</body>

</html>