<!DOCTYPE html>
<html lang="en">

<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script>
  function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("th");
      for (j = 0; j < td.length; j++) {
        if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
          found = true;
        }
      }
      if (found) {
        tr[i].style.display = "";
        found = false;
      } else {
        tr[i].style.display = "none";
      }
    }
  }
</script>
<style>
</style>
<nav class="navbar navbar-light" style="background-color:#D6EAF8 ">
  <div class="container-fluid">
    <a href="List_Exam_Addmin.php" width="40px">
      <i> <img src="../../image/go-back-arrow.png" width="30px"></i>
    </a>
    <a class="navbar-brand text-primary" href="student_management.php" style="font-family: 'Yeseva One', cursive;font-size:23px;">

      <i class="navbar-brand" style="font-size: 40px;color: blue;text-transform: uppercase; font-family:'Roboto', sans-serif;">Student Management</i></a>
    <form class="d-flex col-sm-5">
      <a href="Edit_Student.php" class="btn btn-outline-primary text-dark col-sm-4 me-2" style="background-color: white">
        <i class="material-icons"><img src="../../image/add.png" width="20px"></i>
        <span> Edit student</span>
      </a>
      <a href="Add_Student.php" class="btn btn-outline-primary text-dark col-sm-4 me-2" style="background-color: white">
        <i class="material-icons"><img src="../../image/add.png" width="20px"></i>
        <span> Add new student</span>
      </a>
      <input class="form-control me-2" type="search" placeholder="Search student" aria-label="Search" id="myInput">
      <button class="btn btn-outline-primary text-dark" style="background-color: white" type="button" onclick="searchTable()">Search</button>
    </form>
  </div>
</nav>

<body class="text-center" style="vertical-align: middle;">
  <table class="table table striped table-hover " id="myTable">
    <thead>
      <tr style="font-size: 20px; color: rgb(42, 58, 98);">
        <th>Student ID</th>
        <th>Name</th>
        <th>Date Created</th>
        <th>Student Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="text-center" style="vertical-align: middle;">
      <?php
      require "../connect.php";
      $sql = "select student_id, first_name, last_name, create_date, email from quiz_web.student";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_array($result)) {
        echo "<tr >";
        echo "<th>" . $row['student_id'] . "</th>";
        echo "<th>" . $row['first_name'] . " " . $row['last_name'] . "</th>";
        echo "<th>" . $row['create_date'] . "</th>";
        echo "<th>" . $row['email'] . "</th>";
        echo '<th>
              <a href="Edit_Student.php" class="edit" title="" data-toggle="tooltip" data-original-title="edit"><i class="material-icons" style="margin:0px 20px;"><img src="../../image/edit.png" style="margin: 10px;" width="20px">Edit</i></a>
        </th>
        </tr>';
      }
      ?>

  </table>
  <nav aria-label="..." style="display: inline-block; margin-top: 21% ;">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="#">First</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="#">Previous</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item active">
        <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
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