<?php
require_once "../page/connect.php";
try {
  $testName = $_POST['testName'];
  $subjectId = $_POST['subjectId'];
  $startPicker = $_POST['startPicker'];
  $endPicker = $_POST['endPicker'];
  $questionList = $_POST['questionList'];
  date_default_timezone_set("Asia/Ho_Chi_Minh");

  if (isset($testName) && isset($subjectId) && isset($startPicker) && isset($endPicker)) {
    $startPicker = date("Y-m-d H:i:s", strtotime($startPicker));
    $endPicker = date("Y-m-d H:i:s", strtotime($endPicker));
    $code =  $subjectId + date("YmdHis");

    //insert quiz
    $sql = "insert into quiz_web.test 
        (name, code, subject_id, start_time, end_time,create_date,update_date) 
        VALUES ('$testName' ,$code,'$subjectId', '$startPicker','$endPicker',sysdate(),sysdate())";
    $result = $conn->query($sql);
    $returnIdTest = $conn->insert_id;

    //insert question
    for ($i = 0; $i < count($questionList); $i++) {
      $content = $questionList[$i]['content'];
      $questionType = $questionList[$i]['questionType'];
      $answerList = $questionList[$i]['answerList'];
      
      $questionSql = "insert into quiz_web.question 
            (content, test_id, create_date, update_date, question_type) 
            VALUES ('$content',$returnIdTest,sysdate(),sysdate(),$questionType)";
      $result = $conn->query($questionSql);
      $returnIdQuestion = $conn->insert_id;
      
      //insert answer
      for ($j = 0; $j < count($answerList); $j++) {
        $content = $answerList[$j]['content'];
        $isCorrect = $answerList[$j]['isCorrect'];
        $answerSql = "insert into quiz_web.answer 
        (question_id, content, is_correct, create_date, update_date) 
        VALUES ($returnIdQuestion,'$content',$isCorrect,sysdate(),sysdate())";
        $result = $conn->query($answerSql);
      }
    }
    echo 'Lưu bài thi thành công';
    exit();
  }
} catch (Exception $e) {
  echo 'Message: ' . $e->getMessage();
}
