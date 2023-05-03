var questionList = [];
var bodyQuestion = [];

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
  var listAnswer = document.getElementById("listAnswer");
  var numberAnswer = document.getElementById("selectAnswer").value;
  var questionType = document.getElementById("selectAnswerType").value;
  listAnswer.innerHTML = "";
  for (var i = 1; i <= numberAnswer; i++) {
    listAnswer.innerHTML += `<div class="mb-3">
    <label class="medium mb-1">Câu trả lời ${i}</label>
    <textarea class="form-control" id="answer${i}" rows="2"></textarea>
  </div>`;
  }
  listAnswer.innerHTML += `<div class="mb-3">
  <label class="medium mb-1" for="inputFirstName"
  >Chọn câu trả lời đúng</label>
  </div>`;
  for (var i = 1; i <= numberAnswer; i++) {
    listAnswer.innerHTML += `<div class="form-check">
    <input class="form-check-input" type=${
      questionType == 1 ? "checkbox" : "radio"
    } id = "checkAnswer${i}" name="answerCheck">
    <label class="form-check-label" for="flexCheckDefault">
    Câu trả lời ${i}
    </label>
  </div>`;
  }
}

// function deleteQuestion(numQuestion) {
//   var bodyQuestions = document.getElementById("bodyQuestions");
//   var para = document.createElement("tr");
//   bodyQuestions.innerHTML = "";
//   bodyQuestion.splice(numQuestion - 1, 1);
//   for (var i = 1; i <= bodyQuestion.length; i++) {
//     para.innerHTML = bodyQuestion[i - 1];
//     bodyQuestions.appendChild(para);
//   }
// }

function addQuestion() {
  var bodyQuestions = document.getElementById("bodyQuestions");
  var para = document.createElement("tr");
  var textAreaQuestion = document.getElementById("textQuestion");
  var questionContent = textAreaQuestion.value;
  var listAnswer = document.getElementById("listAnswer");
  var questionType = document.getElementById("selectAnswerType").value;

  let numQuestion = bodyQuestions.children.length;

  if (textAreaQuestion.value == "") {
    alert("Hãy điền câu hỏi");
    return;
  }
  if (listAnswer.childNodes.length == 0) {
    alert("Hãy thêm câu trả lời");
    return;
  }

  let template = `<td>${++numQuestion}</td>
  <td>${questionContent}</td>
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
      onclick="deleteQuestion(${numQuestion})"
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
  bodyQuestion.push(template);
  para.innerHTML = template;
  bodyQuestions.appendChild(para);

  var question = new questionModel();
  question.content = textAreaQuestion.value;
  question.questionType = questionType;

  var answers = document.querySelectorAll('[id^="answer"]');
  question.answerList = [];
  for (var i = 1; i <= answers.length; i++) {
    var checkAnswerId = document.getElementById(`checkAnswer${i}`);
    var answer = new answerModel();
    answer.content = answers[i - 1].value;
    answer.isCorrect = checkAnswerId.checked ? 1 : 0;
    question.answerList.push(answer);
  }
  questionList.push(question);
  //clear section
  textAreaQuestion.value = "";
  $("#addQuestionModal").modal("hide");
}

function saveTest() {
  var testName = document.getElementById("inputTestName").value;
  var subjectId = document.getElementById("inputGroupSubject").value;
  var startPicker = document.getElementById("startPicker").value;
  var endPicker = document.getElementById("endPicker").value;
  if (
    testName == "" ||
    subjectId == 0 ||
    startPicker == "" ||
    endPicker == ""
  ) {
    alert("Hãy điền đầy đủ thông tin bài thi");
    return;
  }
  $.ajax({
    method: "POST",
    url: "../../controller/AddTestController.php",
    data: {
      testName: testName,
      subjectId: subjectId,
      startPicker: startPicker,
      endPicker: endPicker,
      questionList: questionList,
    },
    success: function (result) {
      alert(result);
      location.reload();
    },
  });
}
