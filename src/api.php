<?php
$con = mysqli_connect("localhost", "root", "root", "simple_api_DB");
if($con){
    $query = "Select * from person";
    $result = mysqli_query($con, $query);
    if($result){
        $response = array();
        $i = 0;
        while($row = mysqli_fetch_assoc($result)){
             $response[$i]['id'] = $row['id'];
             $response[$i]['name'] = $row['name'];
             $response[$i]['age'] = $row['age'];
             $response[$i++]['email'] = $row['email'];
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
} else {
    echo "`Database connection failed!";
}
?>