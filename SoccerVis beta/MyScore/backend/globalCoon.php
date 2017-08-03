<?php
/**
 * Created by PhpStorm.
 * User: hongyeliang
 * Date: 2017/7/31
 * Time: 下午2:55
 */


function connectDB(){
    global $conn;
    $conn = mysqli_connect("localhost","root","","SoccerVis");
    $conn->query("set names 'utf8'");
    if(mysqli_connect_errno()){
        printf("Connect failed: %s\n", mysqli_connect_errno());
        exit();
    }
}
?>