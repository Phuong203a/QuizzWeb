<!DOCTYPE html>
<html lang="en">

<head>
    <title>Student Management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
</script>
<style>
</style>
<nav class="navbar navbar-light" style="background-color:#D6EAF8 ">
  <div class="container-fluid">
    <a class="navbar-brand" href="student_management.php" style="font-family:'Roboto', sans-serif;font-size:23px;"><img
      src="/image/go-back-arrow.png" width="40px" style="margin: 20px;">Go back</a>
  <a class="navbar-brand d-flex col-sm-6" style="font-size: 30px;color: blue;text-transform: uppercase; font-family:'Roboto', sans-serif;" >List Exam</a>
  <form class="d-flex col-sm-2.5">
      <a href="quiz_add.php" class="btn btn-outline-primary text-dark col-sm-4 me-5" style="background-color: white">
          <i class="material-icons" ><img src="/image/add.png" width="20px"></i>
          <span> Add new Exam</span>
      </a>
      <input class="form-control me-2" type="search" placeholder="Search exam" aria-label="Search" id = "myInput">
      <button class="btn btn-outline-primary text-dark" style="background-color: white"type="button" onclick="searchTable()" for = "myInput">Search</button>
  </form>
  <script>
    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
  }
  </script>
    </div>
  </nav>
<body class="text-center" style="vertical-align: middle;">
    <table class="table table striped table-hover " id="myTable">
        <thead>
        <tr style="font-size: 20px; color: rgb(42, 58, 98);">
          <th>ID</th>
          <th>Name Exam</th>
          <th>Date Time</th>
          <th>Subject</th>
          <th>Time Do Exam</th>
          <th></th>
      </tr>
  </thead>
  <tbody class="text-center" style="vertical-align: middle;">
  <?php
      require "../connect.php";
      $sql = "select test.id, test.name, test.start_time, subject.name as sname, test.end_time from quiz_web.test 
      inner join quiz_web.subject on test.subject_id = subject.id";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result))
      {
        echo "<tr >";
        echo "<th>".$row['id']."</th>";
        echo "<th>".$row['name']."</th>";
        echo "<th>".$row['start_time']."</th>";
        echo "<th>".$row['sname']."</th>";
        $time1 = strtotime($row['start_time']);
        $time2 = strtotime($row['end_time']);
        $getMinute1 = date('i', $time1);
        $getMinute2 = date('i', $time2);
        $getMinute = $getMinute2 - $getMinute1;
        echo "<th>".$getMinute." minutes"."</th>";
          echo'<th>
              <a href="Edit_Student.php" class="edit" title="" data-toggle="tooltip" data-original-title="edit"><i class="material-icons" style="margin:0px 20px;"><img src="/image/edit.png" style="margin: 10px;" width="20px">Edit</i></a>
          </th>
          </tr>';
      }
    ?>     
    </table>
    <nav aria-label="..." style="display: inline-block; margin-top: 20% ;">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#">First</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active">
            <a class="page-link" href="#"
              >2 <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">Last</a>
          </li>
        </ul>
      </nav>
</body>

</html>