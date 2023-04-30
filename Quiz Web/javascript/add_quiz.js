$(function () {
  $("#startPicker").datetimepicker({
    uiLibrary: "bootstrap4",
    modal: true,
    footer: true,
  });
});
$(function () {
  $("#endPicker").datetimepicker({
    uiLibrary: "bootstrap4",
    modal: true,
    footer: true,
  });
});

function onClickAddQuestion() {
  var modalQuestion = document.getElementById("addQuestionModal");
  var button = document.getElementById("buttonAddQuestion");
  button.onclick = function () {
    modalQuestion.style.display = "block";
  };
}
function generateQuestion() {
  var answerList = document.getElementById("answerList");
  var numberAnswer = document.getElementById("selectAnswer").value;
  var questionType = document.getElementById("selectAnswerType").value;
  console.log(questionType);
  answerList.innerHTML = "";
  for (var i = 1; i <= numberAnswer; i++) {
    answerList.innerHTML += `<div class="mb-3">
    <label class="medium mb-1">Câu trả lời ${i}</label>
    <textarea class="form-control" id="answer${i}" rows="2"></textarea>
  </div>`;
  }
  answerList.innerHTML += `<div class="mb-3">
  <label class="medium mb-1" for="inputFirstName"
  >Chọn câu trả lời đúng</label>
  </div>`;
  for (var i = 1; i <= numberAnswer; i++) {
    answerList.innerHTML += `<div class="form-check">
    <input class="form-check-input" type=${
      questionType == 2 ? "checkbox" : "radio"
    } value="">
    <label class="form-check-label" for="flexCheckDefault">
    Câu trả lời ${i}
    </label>
  </div>`;
  }
}

function addQuestion() {
  var bodyQuestions = document.getElementById("bodyQuestions");
  var para = document.createElement("tr");
  var textAreaQuestion = document.getElementById("textQuestion");
  var question = textAreaQuestion.value;
  var answerList = document.getElementById("answerList");

  let numQuestion = bodyQuestions.children.length;

  if (textAreaQuestion.value == "") {
    alert("Hãy điền câu hỏi");
    return;
  }
  console.log(answerList.childNodes.length);
  if (answerList.childNodes.length == 0) {
    alert("Hãy thêm câu trả lời");
    return;
  }

  let template = ` <td>${++numQuestion}</td>
  <td>${question}</td>
  <td>
    <a
      href="#"
      class="edit"
      title=""
      data-toggle="tooltip"
      data-original-title="Settings"
      ><i class="material-icons"
        ><img
          src="../../image/edit.png"
          style="margin: 10px"
          width="20px"
        />Edit</i
      ></a
    >
    <a
      href="#"
      class="Delete"
      title=""
      data-toggle="tooltip"
      data-original-title="Settings"
      ><i class="material-icons"
        ><img
          src="../../image/x.webp"
          style="margin: 10px"
          width="25px"
        />Delete</i
      ></a
    >
  </td>`;
  para.innerHTML = template;
  bodyQuestions.appendChild(para);
  textAreaQuestion.value = "";

  $("#addQuestionModal").modal("hide");
}
function saveTest() {
  var inputTestName = document.getElementById("inputTestName").value;
  var inputGroupSubject = document.getElementById("inputGroupSubject").value;
  var startPicker = document.getElementById("startPicker").value;
  var endPicker = document.getElementById("endPicker").value;
  if(inputTestName=='' || inputGroupSubject == 0 ||startPicker=='' ||endPicker==''){
    alert("Hãy điền đầy đủ thông tin bài thi123123");
    return;
  }
  console.log(startPicker);
  // $.ajax({
  //   method: "POST",
  //   url: "../controller/AddTestController.php",
  //   success: function () {
  //     console.log("123123");
  //   },
  // });
}
