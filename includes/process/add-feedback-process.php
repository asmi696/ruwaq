<?php
include '../class/cls.connect-db.php';

if(isset($_POST)){
    $title = $_POST["title"];
    $comment = $_POST["comment"];
    $category = $_POST["category"];
    $os = $_POST["os"];
    $interface = $_POST["interface"];
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $organization = $_POST["organization"];
    date_default_timezone_set('Asia/Calcutta');
    $date = date('Y-m-d H:i:s');
    $status = 1;
    
    if (!empty($title) && !empty($comment) && !empty($category)) {
        
    
    $feedback = Database::prepare("insert into feedback (title, comment, category_id, os_id, interface_id, name, mobile, organization, date, status) values (:title, :comment, :categoryId, :osId, :interfaceId, :name, :mobile, :organization, :date, :status)");
    $feedback -> bindValue(':title', $title, PDO::PARAM_STR);
    $feedback -> bindValue(':comment', $comment, PDO::PARAM_STR);
    $feedback -> bindValue(':categoryId', $category, PDO::PARAM_INT);
    $feedback -> bindValue(':osId', $os, PDO::PARAM_INT);
    $feedback -> bindValue(':interfaceId', $interface, PDO::PARAM_INT);
    $feedback -> bindValue(':name', $name, PDO::PARAM_STR);
    $feedback -> bindValue(':mobile', $mobile, PDO::PARAM_STR);
    $feedback -> bindValue(':organization', $organization, PDO::PARAM_STR);
    $feedback -> bindValue(':date', $date, PDO::PARAM_STR);
    $feedback -> bindValue(':status', $status, PDO::PARAM_INT);
    $feedback -> execute();
    
    echo json_encode(array("success" => 1, "message" => "You Have Successfully Sent The Feedback"));

}
else{
    echo json_encode(array("success" => 0, "message" => "Sorry! Please Fill All Fields, Try Again"));
}
} else{
    echo json_encode(array("success" => 0, "message" => "Sorry! Something Went Wrong, Try Again"));
}

