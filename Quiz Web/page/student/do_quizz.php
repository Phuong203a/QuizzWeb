<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        h1 {text-align: center;}
        a {text-align: right; text-decoration: none;}
        body {text-align: justify;}
    </style>
</head>
<nav class="navbar navbar-light" style="background-color:#D6EAF8 ">
    <h1 class="text-center ">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Test here</h1>
    <a href="History_Exam.php">See result&emsp;</a>
</nav>
<body >
    <form method="post" class="mx-auto bg-light" style="width: 1300px;">
    <?php 
        require "../connect.php";
        $sql = "select content as quest FROM question WHERE id = 3";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "</br>"."1) ";
            $st_q = $row['quest'];
            echo  $st_q;
            echo "</br>";
        }
        $sql = "select content as ans FROM answer WHERE question_id = 3";
        $result = mysqli_query($conn, $sql);
        $count = 1;
        while($row = mysqli_fetch_array($result))
        {
            $st_a = $row['ans'];
            echo "<input type='radio' name= 'id3' value= $st_a>";
            echo "$count"." . ";
            echo  $st_a;
            $count += 1;
            echo "</br>";
        }

        $sql = "select content as quest FROM question WHERE id = 7";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "</br>"."2) ";
            $st_q = $row['quest'];
            echo  $st_q;
            echo "</br>";
        }
        $sql = "select content as ans FROM answer WHERE question_id = 7";
        $result = mysqli_query($conn, $sql);
        $count = 1;
        while($row = mysqli_fetch_array($result))
        {
            $st_a = $row['ans'];
            echo "<input type='radio' name= 'id7' value= $st_a>";
            echo "$count"." . ";
            echo  $st_a;
            $count += 1;
            echo "</br>";
        }

        $sql = "select content as quest FROM question WHERE id = 8";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "</br>"."3) ";
            $st_q = $row['quest'];
            echo  $st_q;
            echo "</br>";
        }
        $sql = "select content as ans FROM answer WHERE question_id = 8";
        $result = mysqli_query($conn, $sql);
        $count = 1;
        while($row = mysqli_fetch_array($result))
        {
            $st_a = $row['ans'];
            echo "<input type='radio' name= 'id8' value= $st_a>";
            echo "$count"." . ";
            echo  $st_a;
            $count += 1;
            echo "</br>";
        }


        $sql = "select content as quest FROM question WHERE id = 9";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "</br>"."4) ";
            $st_q = $row['quest'];
            echo  $st_q;
            echo "</br>";
        }
        $sql = "select content as ans FROM answer WHERE question_id = 9";
        $result = mysqli_query($conn, $sql);
        $count = 1;
        while($row = mysqli_fetch_array($result))
        {
            $st_a = $row['ans'];
            echo "<input type='radio' name= 'id9' value= $st_a>";
            echo "$count"." . ";
            echo  $st_a;
            $count += 1;
            echo "</br>";
        }

        $sql = "select content as quest FROM question WHERE id = 10";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result))
        {
            echo "</br>"."5) ";
            $st_q = $row['quest'];
            echo  $st_q;
            echo "</br>";
        }
        $sql = "select content as ans FROM answer WHERE question_id = 10";
        $result = mysqli_query($conn, $sql);
        $count = 1;
        while($row = mysqli_fetch_array($result))
        {
            $st_a = $row['ans'];
            echo "<input type='radio' name= 'id10' value= $st_a>";
            echo "$count"." . ";
            echo  $st_a;
            $count += 1;
            echo "</br>";
        }
        ?>
        </br></br>
        <button class=" btn btn-primary btn-lg" type="submit" style="text-align: center;">Submit</button>
    </form></br>
        <?php
        $student_ans3 = "";
        $student_ans7 = "";
        $student_ans8 = "";
        $student_ans9 = "";
        $student_ans10 = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['id3'])){
                $student_ans3 = $_POST['id3'];
            }
            if (isset($_POST['id7'])){
                $student_ans7 = $_POST['id7'];
            }
            if (isset($_POST['id8'])){
                $student_ans8 = $_POST['id8'];
            }
            if (isset($_POST['id9'])){
                $student_ans9 = $_POST['id9'];
            }
            if (isset($_POST['id10'])){
                $student_ans10 = $_POST['id10'];
            }

            $sql = "select * from quiz_web.answer 
            where question_id = 3 and content like  '%$student_ans3%' and is_correct = 1";
            $result3 = mysqli_query($conn, $sql);
            $rowcount=mysqli_num_rows($result3);
            $correct_count = 0;
            if ($rowcount == 1)
                $correct_count += 1;

            $sql = "select * from quiz_web.answer 
            where question_id = 7 and content like  '%$student_ans7%' and is_correct = 1";
            $result7 = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result7);
            if ($rowcount == 1)
                $correct_count += 1;

            $sql = "select * from quiz_web.answer 
            where question_id = 8 and content like  '%$student_ans8%' and is_correct = 1";
            $result8 = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result8);
            if ($rowcount == 1)
                $correct_count += 1;
                
            $sql = "select * from quiz_web.answer 
            where question_id = 9 and content like  '%$student_ans9%' and is_correct = 1";
            $result9 = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result9);
            if ($rowcount == 1)
                $correct_count += 1;

            $sql = "select * from quiz_web.answer 
            where question_id = 10 and content like  '%$student_ans10%' and is_correct = 1";
            $result10 = mysqli_query($conn, $sql);
            $rowcount = mysqli_num_rows($result10);
            if ($rowcount == 1)
                $correct_count += 1;
            
            $sql = "insert into  quiz_web.student_answer 
            (student_id, test_id, number_correct_answer, finish_timed)
            values ('26', '1', '$correct_count', NOW())";
            $result = mysqli_query($conn, $sql);
        }
    ?>

</body>
</html>