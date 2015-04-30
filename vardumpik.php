<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="stylesheet" href="/public/css/table1.css">
    <script src="/public/js/bootstrap.js"></script>
    <title>TABLE 3</title>
</head>
<body>
    <?php
        include 'nav.php';
    ?>

<div class="container">
    <?php
        $array=array(1, 2, array(array("z", "x"), "b", "c"), array("d", "e", "f"), 5);
        echo "<pre>";
        var_dump($array);
        echo "</pre>";
//        for($i=0; $i<count($Arr); $i++){
    //WAY 1
        function vd($array)
        {
//            foreach($array as $key){
//                echo gettype($key) . " (";
//                if (gettype($key)=='array'){
//                    echo "<br>";
//                    return VD($key);//calling the function inside the function
//                }
//                else {
//                    echo $key.")    " . "<br>";
//                }
//            }
//         }
            //END OF WAY 1
            //WAY 2
            echo "<pre>";
            echo gettype($array) . " (" . count($array) . ") {". "<br>";
            for ($i = 0; $i < count($array); $i++) {
//                $prov = is_array($array[$i]);
                echo " [" . $i . "] "  .  "  " . "=> " . gettype($array[$i]);
                if (gettype($array[$i])=='array') {
                    echo   "<br>";
                    vd($array[$i]) . '</br>';
                } else {
                    echo    " (" . $array[$i] . ")" . " " . "</br>";
                }
            }
            echo "</pre>";
        }
    //END OF WAY 2

        vd($array);
    ?>




</div>
<!--</content>-->

</body>
</html>
