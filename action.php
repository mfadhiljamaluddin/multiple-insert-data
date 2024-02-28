<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "demo");

if(isset($_POST['save_multi_data'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    foreach($name as $index => $names){
        //echo $name." - ".$phone[$index];
        $s_name = $names;
        $s_phone = $phone[$index];
        //$s_otherfiled = $empid[$index];
        
        $query = "INSERT INTO demo (name, phone) VALUES ('$s_name', '$s_phone')";
        $qRun = mysqli_query($con, $query);
    }

    if($qRun){
        $_SESSION['status'] = "Multiple Data Inserted Succ";
        header("Location: test.php");
        exit(0);
    }else{
        $_SESSION['status'] = "Multiple Data Inserted NOT SUCC";
        header("Location: test.php");
        exit(0);
    }
}