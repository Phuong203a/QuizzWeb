<?php
require_once "../connect.php";
$sql = "select * from subject;";
$result = mysqli_query($conn, $sql);
$subjectList = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Quiz Management</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

    <script
      src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js"
      type="text/javascript"
    ></script>
    <link
      href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <script type="text/javascript" src="../../javascript/add_quiz.js"></script>
    <script type="text/javascript" src="../../javascript/model.js"></script>

  </head>

  <nav
    class="navbar navbar-expand-lg navbar-light"
    style="background-color: #d6eaf8" 
  >
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="navbar-brand" href="#">Home</a>
        </li>
      </ul>
    </div>
  </nav>
  <body>
    <div class="container-xl px-4 mt-4">
      <div class="card">
        <div class="card-header" style="background-color: #d6eaf8">
          Test details
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="small mb-1" for="inputUsername">Tên bài test</label>
              <input
                class="form-control"
                id="inputTestName"
                type="text"
                placeholder="Điền tên bài test"
              />
            </div>
            <div class="mb-3">
              <label class="small mb-1" for="inputUsername">Môn học</label>
              <select class="custom-select" id="inputGroupSubject">
                <option selected value="0">Chọn môn học</option>
                <?php
                foreach ($subjectList as $subject) {
                  ?>
                   <option value="<?= $subject["id"] ?>"><?= $subject["name"] ?></option>
                  <?php
                }
                ?>
              </select>
            </div>
            <div class="row gx-5 mb-3">
              <div class="col-md-4">
                <label class="small mb-1" for="inputFirstName"
                  >Thời gian bắt đầu làm bài</label
                >
                <input id="startPicker" />
              </div>
              <div class="col-md-4">
                <label class="small mb-1" for="inputLastName"
                  >Thời gian kết thúc làm bài</label
                >
                <input id="endPicker" />
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="card" style="margin: 5% 0% 5% 0%">
        <div class="card-header" style="background-color: #d6eaf8">
          Questions
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Câu hỏi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody id="bodyQuestions"></tbody>
              </table>
              <div class="col text-center">
                <button
                  id="buttonAddQuestion"
                  type="button"
                  data-toggle="modal"
                  href="#addQuestionModal"
                  class="btn btn-primary"
                  data-target="#addQuestionModal"
                >
                  Thêm mới câu hỏi
                </button>
              </div>
            </div>  
          </div>
        </div>
      </div>
      <div class="col text-center">
        <button
          id="buttonAddQuestion"
          type="button"
          class="btn btn-primary"
          onclick="saveTest()"
        >
          Lưu bài thi
        </button>
      </div>
    </div>

    <!-- add question modal -->
    <div id="addQuestionModal" class="modal fade" role="dialog">
      <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <hp class="modal-title">Thêm mới câu hỏi</hp>
            <button type="button" class="close" data-dismiss="modal"></button>
          </div>
          <div class="modal-body" id="modalBody">
            <div class="mb-3">
              <label class="medium mb-1" for="inputUsername">Câu hỏi</label>
              <textarea
                class="form-control"
                id="textQuestion"
                rows="5"
              ></textarea>
            </div>
            <div class="row gx-5 mb-3">
              <div class="col-md-4">
                <label class="medium mb-1" for="inputFirstName"
                  >Chọn số lượng câu hỏi</label
                >

                <select
                  class="form-select"
                  id="selectAnswer"
                  aria-label="Default select example"
                >
                  <option selected value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
              <div class="col-md-4">
                <label class="medium mb-1" for="inputFirstName"
                  >Chọn kiểu câu hỏi</label
                >
                <select
                  class="form-select"
                  id="selectAnswerType"
                  aria-label="Default select example"
                >
                  <option selected value="0">Một lựa chọn</option>
                  <option value="1">Nhiều lựa chọn</option>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <button
                type="button"
                class="btn btn-primary"
                onclick="generateQuestion()"
              >
                Hiển thị câu trả lời
              </button>
            </div>
            <div id="listAnswer"></div>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-primary"
              onclick="addQuestion()"
            >
              Thêm mới
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
