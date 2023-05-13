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
    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color:#D6EAF8 ">
    <h1 class="text-center">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Test here</h1>
    </nav>
    <form method="post">
    <?php 
        require "../connect.php";
        $sql = "select question.content as question FROM quiz_web.question WHERE question.test_id = 1
        union
        select answer.content as answer from quiz_web.answer WHERE answer.question_id = 3 or answer.question_id = 7 or answer.question_id = 8";
        $result = mysqli_query($conn, $sql);
        $count = 0;
        $countq = 1;
        $counta = 1;
        while($row = mysqli_fetch_array($result))
        {
            $count += 1;
            $st_ans = $row['question'];
            if($count % 5 == 1){
                echo $countq.")&emsp;";
                echo $st_ans;
                $countq += 1;
                $counta = 1;
            }
            else{
                echo "*"."<input type='radio' name= '$countq' value= $st_ans>";
                echo $counta." . " ;
                $counta += 1;
                echo $st_ans;
            }
            echo "</br>";
        }
        ?>
        </br>
        <button class=" btn btn-primary" type="submit">Submit</button>
    </form>
        <?php
        // if (isset($_GET['1'])){

        // }
    ?>
</body>
</html>