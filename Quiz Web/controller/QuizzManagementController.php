<?php

$limit = 2;
function fetchData()
{
    try {
        require "../connect.php";
        
        $page = 0;
        $search = "";
        if (isset($_GET["search"])) {
            $search = $_GET["search"];
        }
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }
        $limit = $GLOBALS['limit'];
        $offset = ($page - 1) * $limit;
        $sql = "select t.id ,t.name ,t.code ,s.code  as subjectCode,
        t.start_time ,t.end_time 
        from test t, subject s 
        where t.subject_id = s.id 
        and t.name like '%$search%'
        order by id desc
        limit $limit offset $offset;";
        $result = mysqli_query($conn, $sql);
        $testList = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $testList;
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}
function getTotalPage()
{
    try {
        require "../connect.php";
        $sql = "select * from test;";
        $result = mysqli_query($conn, $sql);
        $numRows = $result->num_rows;
        $limit = $GLOBALS['limit'];
        $totalPage = ceil($numRows / $limit);
        return $totalPage;
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}
function getPrevious()
{
    try {
        $currentPage = 1;
        if (isset($_GET["page"])) {
            $currentPage = $_GET["page"];
            if ($_GET["page"] > 1) {
                $page = $currentPage - 1;
            }
        } else {
            $page = 1;
        }
        return $page;
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}
function getNext()
{
    try {
        $page = 0;
        $lastPage = getTotalPage();
        if (isset($_GET["page"])) {
            if ($_GET["page"] < $lastPage) {
                $page = $_GET["page"] + 1;
            } else {
                $page = $lastPage;
            }
        } else {
            $page = 1;
        }
        return $page;
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}
function isCurrentPage($currentPage)
{
    return (isset($_GET["page"]) ? $_GET["page"] : 1) == $currentPage;
}
function getFirstPaggination()
{
    try {
        if (isset($_GET["page"])) {
            $firstPage = $_GET["page"] - 1 < 1 ? 1 : $_GET["page"] - 1;
            if ($_GET["page"] == getTotalPage()) {
                $firstPage = getTotalPage() - 2;
            }
        } else {
            $firstPage = 1;
        }
        return $firstPage;
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}
function getLastPaggination()
{
    try {
        $firstPage = getFirstPaggination();
        $lastPage = $firstPage + 2 > getTotalPage() ? getTotalPage() : $firstPage + 2;
        return $lastPage;
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}
function getFirstIndex()
{
    try {
        $page = isset($_GET["page"]) ? $_GET["page"] : 1;
        $limit = $GLOBALS['limit'];
        $firstIndex = ($page - 1) * $limit + 1;
        return $firstIndex;
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
}

