<?php
/**
 * Created by PhpStorm.
 * User: hongyeliang
 * Date: 2017/7/31
 * Time: 下午2:57
 */
include 'globalCoon.php';
global $conn;
connectDB();


$query_result1 = mysqli_query($conn, "select * from div1;");
if($query_result1){
    $fetched = mysqli_fetch_array($query_result1);
    $result1 = array(
            "SequencecAnimation" => $fetched['animation'],
            "ClusteringDuration" => $fetched['duration'],
            "nodecircle" => $fetched['nodecircle'],
            "nodejersey" => $fetched['nodejersey'],
            "nodeLink" => $fetched['Node-link'],
            "nodeLinkAll" => $fetched['Node-link-all'],
            "hiveplot" => $fetched['HivePlot'],
            "matrix" => $fetched['Matrix'],
            "tagcloud" => $fetched['TagCloud']


    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
else{
    $result1 = array(
        "msg" => "查找失败"
    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
//mysqli_close($conn);

$query_result2 = mysqli_query($conn, "select * from div2;");
if($query_result2){
    $fetched = mysqli_fetch_array($query_result2);
    $result2 = array(
        "context" => $fetched['context'],
        "VisDuration" => $fetched['duration'],
        "nodeLink" => $fetched['Node-link'],
        "nodeLinkAll" => $fetched['Node-link-all'],
        "hiveplot" => $fetched['HivePlot'],
        "matrix" => $fetched['Matrix'],
        "tagcloud" => $fetched['TagCloud']


    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
else{
    $result2 = array(
        "msg" => "查找失败"
    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
//ysqli_close($conn);

$query_result3 = mysqli_query($conn, "select * from div3;");
if($query_result3){
    $fetched = mysqli_fetch_array($query_result3);
    $result3 = array(
        "myfield" => $fetched['field'],
        "globalflow" => $fetched['globalflow'],
        "mylinear" => $fetched['mylinear'],
        "stepBefore" => $fetched['step-before'],
        "stepAfter" => $fetched['step-after'],
        "basis" => $fetched['basis'],
        "basisClosed" => $fetched['basis-closed'],
        "cardinal" => $fetched['cardinal'],
        "cardinalClosed" => $fetched['cardinal-closed'],
        "mysize" => $fetched['mysize']


    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
else{
    $result3 = array(
        "msg" => "查找失败"
    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
//mysqli_close($conn);

$query_result4 = mysqli_query($conn, "select * from div4;");
if($query_result4){
    $fetched = mysqli_fetch_array($query_result4);
    $result4 = array(
        "twoD" => $fetched['2D'],
        "myhorizontal" => $fetched['horizontal'],
        "avgDuration" => $fetched['avgDuration'],
        "avgDelay" => $fetched['avgDelay']

    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
else{
    $result4 = array(
        "msg" => "查找失败"
    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
//mysqli_close($conn);

$query_result5 = mysqli_query($conn, "select * from div5;");
if($query_result5){
    $fetched = mysqli_fetch_array($query_result5);
    $result5 = array(
        "myScaled" => $fetched['Scaled'],
        "myScaledLinks" => $fetched['ScaledLinks'],
        "mySignature" => $fetched['Signature'],
        "myWorm" => $fetched['Worm'],
        "myXProj" => $fetched['XProj'],
        "myYProj" => $fetched['YProj'],
        "myTimeAlign" => $fetched['TimeAlign'],
        "myDistanceAlign" => $fetched['DistanceAlign'],
        "myDonut" => $fetched['Donut'],
        "avgDuration" => $fetched['avgDuration'],
        "avgDelay" => $fetched['avgDelay'],
        "avgDrawField" => $fetched['avgDrawField']


    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
else{
    $result5 = array(
        "msg" => "查找失败"
    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
//mysqli_close($conn);

$query_result6 = mysqli_query($conn, "select * from div6;");
if($query_result6){
    $fetched = mysqli_fetch_array($query_result6);
    $result6 = array(
        "mynormal" => $fetched['normal'],
        "CatmullRomChain" => $fetched['CatmullRomChain'],
        "SIA1" => $fetched['SIA1'],
        "SIA2" => $fetched['SIA2'],
        "SIA3" => $fetched['SIA3'],
        "SIA4" => $fetched['SIA4'],
        "ComputeBezier1" => $fetched['ComputeBezier1'],
        "ComputeBezier2" => $fetched['ComputeBezier2'],
        "ComputeBezier3" => $fetched['ComputeBezier3'],
        "ComputeBezier4" => $fetched['ComputeBezier4'],
        "ComputeBezier5" => $fetched['ComputeBezier5'],
        "ComputeBezier6" => $fetched['ComputeBezier6'],
        "kMeansOrkMedoids1" => $fetched['kMeansOrkMedoids1'],
        "kMeansOrkMedoids2" => $fetched['kMeansOrkMedoids2'],
        "kMeansOrkMedoids3" => $fetched['kMeansOrkMedoids3'],
        "kMeansOrkMedoids4" => $fetched['kMeansOrkMedoids4'],
        "kMeansOrkMedoids5" => $fetched['kMeansOrkMedoids5'],
        "kMeansOrkMedoids6" => $fetched['kMeansOrkMedoids6'],
        "kMeansOrkMedoids7" => $fetched['kMeansOrkMedoids7'],
        "kMeansOrkMedoids8" => $fetched['kMeansOrkMedoids8'],
        "kMeansOrkMedoids9" => $fetched['kMeansOrkMedoids9'],
        "kMeansOrkMedoids10" => $fetched['kMeansOrkMedoids10'],
        "kMeans" => $fetched['k-means'],
        "kMedoids" => $fetched['k-medoids']


    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
else{
    $result6 = array(
        "msg" => "查找失败"
    );
    //echo json_encode($result1,JSON_UNESCAPED_UNICODE);
}
mysqli_close($conn);


$all_result = array(
    "div1" => $result1,
    "div2" => $result2,
    "div3" => $result3,
    "div4" => $result4,
    "div5" => $result5,
    "div6" => $result6
);

echo json_encode($all_result,JSON_UNESCAPED_UNICODE);

