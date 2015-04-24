<html>
<head>
    <link rel="stylesheet" href="/public/css/bootstrap.min.css">
    <title>Test</title>
</head>
<body>

<?php
$cen = array(
    array(
        "fio"=>"Ivanov Ivan Ivanovich",
        "info"=> array(
            "fak"=>"MLD",
            "spec"=>"ODK",
            "kurs"=>"2",
        ),
    ),
    array(
        "fio"=>"Petrov Petr Petrovich",
        "info"=>array(
            "fak"=>"SAF",
            "spec"=>"GEW",
            "kurs"=>"2",
        ),
    ),
    array(
        "fio"=>"Kornilov Kirill Kirillovich",
        "info"=>array(
            "fak"=>"BSD",
            "spec"=>"DSG",
            "kurs"=>"4",
        ),
    ),

);
//    ?>
<table class="table table-hover">
    <?php
    foreach ($cen as $student)
    {
        echo "<tr>
            <td>".$student["fio"]."</td>
            <td>".$student["info"]["fak"]."</td>
            <td>".$student["info"]["spec"]."</td>
            <td>".$student["info"]["kurs"]."</td>
            <td></td>
            </tr>";
    }
    ?>
</table>

?>


<!--<p>-->
<?php
//      $array = array("Ivanov", "Petrov", "Kornilov");
//      foreach ($array as $a){
//          echo "<li>$a</li>";
//      }
//?>
<!--</p>-->
<!--<p>--><?php
//$cen = array(
//    array(
//        "fio"=>"Ivanov Ivan Ivanovich",
//        "info"=> array(
//            "fak"=>"MLD",
//            "spec"=>"ODK",
//            "kurs"=>"2",
//        ),
//    ),
//    array(
//        "fio"=>"Petrov Petr Petrovich",
//        "info"=>array(
//            "fak"=>"SAF",
//            "spec"=>"GEW",
//            "kurs"=>"2",
//        ),
//    ),
//    array(
//        "fio"=>"Kornilov Kirill Kirillovich",
//        "info"=>array(
//            "fak"=>"BSD",
//            "spec"=>"DSG",
//            "kurs"=>"4",
//        ),
//    ),
//
//);
//    ?><!--</p>-->
<!--<table class="table">-->
<!--    -->
<!--</table>-->
<!--<p>-->
<!--    --><?php
//    $str="TEST STRING!!";
//    echo $str . "<br />";
//    $lenght=strlen($str);
//    for($a=0; $a<=$lenght; $a++){
//        $lenght--;
//        $b=$str{$a};
//        $str{$a}=$str{$lenght};
//        $str{$lenght}=$b;
//    }
//    echo $str;
//    ?>
<!--</p>-->
<!--<p>-->
<!--    --><?php
//    $a=123;
//    $b=987;
//    echo $a. "  " . $b . "<br />";
//    $a=$a*$b;
//    $b=$a/$b;
//    $a=$a/$b;
//    echo $a. "  " . $b;
//
//    ?>
<!--</p>-->
<!---->
</body>
</html>

<!---->
<!---->
<!---->
<!---->
