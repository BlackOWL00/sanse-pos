<?php
    require ("config/config.php");
    require ("config/db.php"); 
    $method = $_SERVER['REQUEST_METHOD'];
    // $request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
    
    switch ($method) {
        case 'GET':
            $select = "SELECT * FROM tbl_menuitem";
          break;
    }

    $result = mysqli_query($conn, $select);
    if (!$result) {
        http_response_code(404);
        die(mysqli_error($conn));
      }      

    if ($method == 'GET') {
        $formatted_result = array();
        while($r = mysqli_fetch_assoc($result)) {
            $formatted_result[] = $r;
        }
        echo json_encode($formatted_result);
        // echo '[';
        // for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
        //   echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
        // }
        // echo ']';
      } else {
        echo mysqli_affected_rows($conn);
      }
      
    $conn->close();
?>