<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
    <title>INFO</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/24april.html"><img src="http://files.pokefans.net/sprites/xy/007.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="/24april.html"><span class="glyphicon glyphicon-header" aria-hidden="true"></span> Home</a></li>
                <li><a><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Info</a></li>
                <li><a href="table.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Table</a></li>
                <li><a href="table2.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Table 2</a></li>
                <li><a href="forma.html"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Form</a></li>
                <li class="active"><a href="words.html"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Sentence</a></li>
            </ul>
            <!--            <ul class="nav navbar-nav navbar-right">-->
            <!--                <li class="active"><a>Info</a></li>-->
            <!--            </ul>-->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <?php
        include("lib/Class1.php");

        $str =  $_POST['sentence'];
        $exz = new Class1($str);
        $count = $exz->startCount();

        echo "Общее кол-во слов: " . "<b>" . ($count) . "</b>" . "<br>";

        $newArray = $exz->run();
        ksort($newArray);

        foreach ( $newArray as $key => $value) {
            echo "<br>" . "Все слова, состоящие из " . "<b>" . $key . "</b>" . " букв: " . "<b>" . count($value) . "</b>" . 'шт - ' . implode(", ", $value);
            "</br>";
        }


//                echo "Предложение: " . "<b>" . $_POST['sentence'] . "</b>" . "<br>";
//                $keywords = preg_split("/[\s,!?.:-]+/", $_POST['sentence']);//переводит предложение в массив, убирая знаки
//                $count = count($keywords);
//                echo "Общее кол-во слов: " . "<b>" . ($count) . "</b>" . "<br>";
//                $newArray = array();
//                foreach ($keywords as $key => $value) {
//                    $num = (strlen(iconv('UTF-8', 'windows-1251', $value)));
//                    if ($num) {
//                        $newArray[$num][] = $value;
//                    }
//                    }
//                ksort($newArray);
//                foreach ($newArray as $key => $value) {
//                    echo "<br>" . "Все слова, состоящие из " . "<b>" . $key . "</b>" . " букв: " . "<b>" . count($value) . "</b>" . 'шт - ' . implode(", ", $value);
//                    "</br>";
//                }







        ?>


    </div>
</div>

</body>
</html>
