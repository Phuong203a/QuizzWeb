<?php
require_once "../page/connect.php";
try {
    $testName = $_POST['testName'];
    $subjectId = $_POST['subjectId'];
    $startPicker = $_POST['startPicker'];
    $endPicker = $_POST['endPicker'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");

    if (isset($testName) && isset($subjectId) && isset($startPicker) && isset($endPicker)) {
        $createDate = date("Y-m-d H:i:s");
        $updateDate = date("Y-m-d H:i:s");
        $startPicker = date("Y-m-d H:i:s",strtotime( $startPicker));
        $endPicker = date("Y-m-d h:i:s",strtotime($endPicker));
        $code =  $subjectId + date("YmdHis");

        $sql = "insert into quiz_web.test 
        (name, code, subject_id, start_time, end_time,create_date,update_date) 
        VALUES ('$testName' ,$code,'$subjectId', '$startPicker','$endPicker',sysdate(),sysdate())";
        $result = mysqli_query($conn, $sql);
        echo 'Lưu bài thì thành công';
        exit();
    }
}catch(Exception $e) {
    echo 'Message: ' .$e->getMessage();
  }
