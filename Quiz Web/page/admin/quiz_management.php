<?php
require_once "../../controller/QuizzManagementController.php";
$testList = fetchData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quiz Management</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<script></script>



<body class="text-center" style="vertical-align: middle">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d6eaf8">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="navbar-brand" href="List_Exam_Addmin.php">Home</a>
      </li>
    </ul>

    <form class="d-flex col-sm-5">
      <input class="form-control me-2" id="searchQuiz" type="search" placeholder="Search quiz" aria-label="Search" />
      <a href="#" id ="buttonSearch" class="btn btn-outline-primary text-dark" style="background-color: white" type="submit">Search</a> 
    </form>
  </div>
</nav>
  <table class="table table striped table-hover">
    <thead>
      <tr style="font-size: 20px; color: rgb(42, 58, 98)">
        <th>STT</th>
        <th>Test</th>
        <th>Subject code</th>
        <th>Start date</th>
        <th>End date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="text-center" style="vertical-align: middle">

      <?php
      $startIndex = getFirstIndex();

      foreach ($testList as $test) {

      ?>
        <tr>
          <th><?=$startIndex++?></th>
          <th><a href="#"><?= $test['name'] ?></a></th>
          <th><?= $test['subjectCode'] ?></th>
          <th><?= $test['start_time'] ?></th>
          <th><?= $test['end_time'] ?></th>
          <th>
            <a href="#" class="edit" title="" data-toggle="tooltip" data-original-title="edit"><i class="material-icons" style="margin: 0px 20px"><img src="../../image/edit.png" style="margin: 10px" width="20px" />Edit</i></a>
            <a href="#" class="Delete" title="" data-toggle="tooltip" data-original-title="Delete"><i class="material-icons"><img src="../../image/x.webp" style="margin: 10px" width="25px" />Delete</a>
          </th>
        </tr>
      <?php
      }
      ?>


    </tbody>
  </table>
  <nav aria-label="..." style="display: inline-block">
    <ul class="pagination">
      <li class="page-item">
        <a class="page-link" href="?page=1" onclick="">First</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="?page=<?= getPrevious() ?>">Previous</a>
      </li>
      <?php
      $totalPage =  getTotalPage();
      $firstPaggination = getFirstPaggination();
      $endPaggination = getLastPaggination();
      for ($i = $firstPaggination; $i <= $endPaggination; $i++) {
        if (isCurrentPage($i)) {
      ?>
          <li class="page-item active">
            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?>
            </a>
          </li>
        <?php
        } else {
        ?>
          <li class="page-item">
            <a class="page-link" href="?page=<?= $i ?>"><?= $i ?>
            </a>
          </li>
        <?php
        }
        ?>


      <?php
      }
      ?>

      <!-- <li class="page-item active">
        <a class="page-link" href="#">2<span class="sr-only">(current)</span></a>
      </li> -->
      <li class="page-item">
        <a class="page-link" href="?page=<?= getNext() ?>">Next</a>
      </li>
      <li class="page-item">
        <a class="page-link" href="?page=<?= getTotalPage() ?>">Last</a>
      </li>
    </ul>
  </nav>
  <script type="text/javascript">
    function fetchData() {
      $.ajax({
        method: "GET",
        url: "../../controller/QuizzManagementController.php",
        data: {
          page:page,
          search: search,
        },
        success: function(result) {
          alert(result);
          location.reload();
        },
      });
    }
    function search(){

    }
  </script>
</body>

</html>