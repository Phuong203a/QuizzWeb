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
      <a class="navbar-brand" style="font-size: 30px;color: blue;text-transform: uppercase; font-family:'Roboto', sans-serif;">Student Management</a>
      <form class="d-flex col-sm-5">
        <a href="/page/admin/Add_Student.html" class="btn btn-outline-primary text-dark col-sm-4 me-5" style="background-color: white">
            <i class="material-icons" ><img src="/image/add.png" width="20px"></i>
            <span> Add new student</span>
        </a>
        <input class="form-control me-2" type="search" placeholder="Search student" aria-label="Search">
        <button class="btn btn-outline-primary text-dark" style="background-color: white"type="submit">Search</button>
</form>
    </div>
  </nav>
<body class="text-center" style="vertical-align: middle;">
    <table class="table table striped table-hover ">
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
      $sql = "select student_id, first_name, last_name, date_of_birth, email from quiz_web.student";
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_array($result))
      {
        echo "<tr >";
        echo "<th>".$row['student_id']."</th>";
        echo "<th>".$row['first_name']." ".$row['last_name']."</th>";
        echo "<th>".$row['date_of_birth']."</th>";
        echo "<th>".$row['email']."</th>";
        echo'<th>
              <a href="Edit_Student.php" class="edit" title="" data-toggle="tooltip" data-original-title="edit"><i class="material-icons" style="margin:0px 20px;"><img src="/image/edit.png" style="margin: 10px;" width="20px">Edit</i></a>
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