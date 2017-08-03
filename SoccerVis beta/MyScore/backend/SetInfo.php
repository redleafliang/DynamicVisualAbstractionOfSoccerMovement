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
$InfoValue = $_GET ['InfoValue'];
$InfoLocation = $_GET ['InfoLocation'];

switch (InfoLocation){
    case "AnimateClusteringDuration":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div1 SET duration = ( duration * 19 +'$InfoValue' ) / 20   ");
        break;
    case "sequenceLayoutDuration":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div4 SET avgDuration = ( avgDuration * 19 +'$InfoValue' ) / 20   ");
        break;
    case "sequenceLayoutDelay":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div4 SET avgDelay = ( avgDelay * 19 +'$InfoValue' ) / 20   ");
        break;
    case "sequenceLayout":
        if($InfoValue == "2D"){
            $query_result = mysqli_query($conn, " UPDATE div4 SET 2D = 2D + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div4 SET horizontal = horizontal + 1  ");
        }
        break;
    case "NodeStyle":
        if($InfoValue == "circle"){
            $query_result = mysqli_query($conn, " UPDATE div1 SET nodecircle = nodecircle + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div1 SET nodejersey = nodejersey + 1  ");
        }
        break;
    case "switchVisType":
        if($InfoValue == "Node-link"){
            $query_result = mysqli_query($conn, " UPDATE div2 SET Node-link = Node-link + 1  ");
        }
        elseif($InfoValue == "Node-link-all"){
            $query_result = mysqli_query($conn, " UPDATE div2 SET Node-link-all = Node-link-all + 1  ");
        }
        elseif($InfoValue == "HivePlot"){
            $query_result = mysqli_query($conn, " UPDATE div2 SET HivePlot = HivePlot + 1  ");
        }
        elseif($InfoValue == "Matrix"){
            $query_result = mysqli_query($conn, " UPDATE div2 SET Matrix = Matrix + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div2 SET TagCloud = TagCloud + 1  ");
        }

        break;
    case "switchVisDuration":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div2 SET duration = ( duration * 19 +'$InfoValue' ) / 20   ");
        break;
    case "ClusterAlgorithmMode":
        if($InfoValue == "k-means"){
            $query_result = mysqli_query($conn, " UPDATE div6 SET k-means = k-means + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div6 SET k-medoids = k-medoids + 1  ");
        }
        break;
    case "layerController":
        if($InfoValue == 0){
            $query_result = mysqli_query($conn, " UPDATE div6 SET normal = normal + 1  ");
        }
        else if($InfoValue == 10){
            $query_result = mysqli_query($conn, " UPDATE div6 SET CatmullRomChain = CatmullRomChain + 1  ");
        }
        else if($InfoValue == 20){
            $query_result = mysqli_query($conn, " UPDATE div6 SET SIA1 = SIA1 + 1  ");
        }
        else if($InfoValue == 30){
            $query_result = mysqli_query($conn, " UPDATE div6 SET SIA2 = SIA2 + 1  ");
        }
        else if($InfoValue == 40){
            $query_result = mysqli_query($conn, " UPDATE div6 SET SIA3 = SIA3 + 1  ");
        }
        else if($InfoValue == 50){
            $query_result = mysqli_query($conn, " UPDATE div6 SET SIA4 = SIA4 + 1  ");
        }
        else if($InfoValue == 60){
            $query_result = mysqli_query($conn, " UPDATE div6 SET ComputeBezier1 = ComputeBezier1 + 1  ");
        }
        else if($InfoValue == 70){
            $query_result = mysqli_query($conn, " UPDATE div6 SET ComputeBezier2 = ComputeBezier2 + 1  ");
        }
        else if($InfoValue == 80){
            $query_result = mysqli_query($conn, " UPDATE div6 SET ComputeBezier3 = ComputeBezier3 + 1  ");
        }
        else if($InfoValue == 90){
            $query_result = mysqli_query($conn, " UPDATE div6 SET ComputeBezier4 = ComputeBezier4 + 1  ");
        }
        else if($InfoValue == 100){
            $query_result = mysqli_query($conn, " UPDATE div6 SET ComputeBezier5 = ComputeBezier5 + 1  ");
        }
        else if($InfoValue == 110){
            $query_result = mysqli_query($conn, " UPDATE div6 SET ComputeBezier6 = ComputeBezier6 + 1  ");
        }
        else if($InfoValue == 120){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids1 = kMeansOrkMedoids1 + 1  ");
        }
        else if($InfoValue == 130){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids2 = kMeansOrkMedoids2 + 1  ");
        }
        else if($InfoValue == 140){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids3 = kMeansOrkMedoids3 + 1  ");
        }
        else if($InfoValue == 150){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids4 = kMeansOrkMedoids4 + 1  ");
        }
        else if($InfoValue == 160){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids5 = kMeansOrkMedoids5 + 1  ");
        }
        else if($InfoValue == 170){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids6 = kMeansOrkMedoids6 + 1  ");
        }
        else if($InfoValue == 180){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids7 = kMeansOrkMedoids7 + 1  ");
        }
        else if($InfoValue == 190){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids8 = kMeansOrkMedoids8 + 1  ");
        }
        else if($InfoValue == 200){
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids9 = kMeansOrkMedoids9 + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div6 SET kMeansOrkMedoids10 = kMeansOrkMedoids10 + 1  ");
        }

        break;
    case "AnimateSequenceDuration":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div1 SET animation = ( animation * 19 +'$InfoValue' ) / 20   ");
        break;
    case "PassClusterStyle":
        if($InfoValue == "Node-link"){
            $query_result = mysqli_query($conn, " UPDATE div1 SET Node-link = Node-link + 1  ");
        }
        elseif($InfoValue == "Node-link-all"){
            $query_result = mysqli_query($conn, " UPDATE div1 SET Node-link-all = Node-link-all + 1  ");
        }
        elseif($InfoValue == "HivePlot"){
            $query_result = mysqli_query($conn, " UPDATE div1 SET HivePlot = HivePlot + 1  ");
        }
        elseif($InfoValue == "Matrix"){
            $query_result = mysqli_query($conn, " UPDATE div1 SET Matrix = Matrix + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div1 SET TagCloud = TagCloud + 1  ");
        }

        break;
    case "GlobalFlowInterpolate":
        if($InfoValue == "linear"){
            $query_result = mysqli_query($conn, " UPDATE div3 SET linear = linear + 1  ");
        }
        elseif($InfoValue == "step-before"){
            $query_result = mysqli_query($conn, " UPDATE div3 SET step-before = step-before + 1  ");
        }
        elseif($InfoValue == "step-after"){
            $query_result = mysqli_query($conn, " UPDATE div3 SET step-after = step-after + 1  ");
        }
        elseif($InfoValue == "basis"){
            $query_result = mysqli_query($conn, " UPDATE div3 SET basis = basis + 1  ");
        }
        elseif($InfoValue == "basis-closed"){
            $query_result = mysqli_query($conn, " UPDATE div3 SET basis-closed = basis-closed + 1  ");
        }
        elseif($InfoValue == "cardinal"){
            $query_result = mysqli_query($conn, " UPDATE div3 SET cardinal = cardinal + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div3 SET cardinal-closed = cardinal-closed + 1  ");
        }
        break;
    case "SequenceVisMode":
        if($InfoValue == "Scaled"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET Scaled = Scaled + 1  ");
        }
        elseif($InfoValue == "ScaledLinks"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET ScaledLinks = ScaledLinks + 1  ");
        }
        elseif($InfoValue == "Signature"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET Signature = Signature + 1  ");
        }
        elseif($InfoValue == "Worm"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET Worm = Worm + 1  ");
        }
        elseif($InfoValue == "XProj"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET XProj = XProj + 1  ");
        }
        elseif($InfoValue == "YProj"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET YProj = YProj + 1  ");
        }
        elseif($InfoValue == "TimeAlign"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET TimeAlign = TimeAlign + 1  ");
        }
        elseif($InfoValue == "DistanceAlign"){
            $query_result = mysqli_query($conn, " UPDATE div5 SET DistanceAlign = DistanceAlign + 1  ");
        }
        else{
            $query_result = mysqli_query($conn, " UPDATE div5 SET Donut = Donut + 1  ");
        }
        break;
    case "SequenceVisDuration":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div5 SET avgDuration = ( avgDuration * 19 +'$InfoValue' ) / 20   ");
        break;
    case "SequenceVisDelay":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div5 SET avgDelay = ( avgDelay * 19 +'$InfoValue' ) / 20    ");
        break;
    case "GlobalFlowSize":
        //avg
        $query_result = mysqli_query($conn, " UPDATE div3 SET mysize = ( mysize * 19 +'$InfoValue' ) / 20    ");
        break;


};












$all_result = [$InfoValue,$InfoLocation];
echo json_encode($all_result,JSON_UNESCAPED_UNICODE);