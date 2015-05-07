<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/style.css">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
    <title>HOME</title>
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
            <!--<a href="/24april.html"><img src="http://gloria-project.eu/wp-content/uploads/2012/06/logo-256-transp.png"></a>-->
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
                <li><a href="words.html"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Sentence</a></li>
                <li class="active"><a href="stoimost_okna.php"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span> Okna</a></li>
            </ul>
            <!--<ul class="nav navbar-nav navbar-right">-->
            <!--<li class="active"><a>Home</a></li>-->
            <!--</ul>-->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <?php
        include("lib/class_okna.php");
        include("okna.php");
        include("lib/valid.php");



        $vys=$_POST['vys'];
        $shyr=$_POST['shir'];
        $profi=$_POST['profil'];
        $arr1=$profil[$profi];
        $stek=$_POST['stek'];
        $pov=$_POST['pov'];
        $arr=$povoroty[$pov];
        $type=$_POST['type'];
        $arr2=$typ[$type];


//        $exz=new class_okna();
//        $ploshad=$exz->place($vys,$shyr);

        $exz=new oknaPlast();




        $exz->createWindow($vys,$shyr,$stek,$arr1,$arr);

        $oknaCal = new class_okna_cal();
        $exz->plosh = $oknaCal->place($exz);
        $exz->sum =$oknaCal->summa($exz);

        $ploshad = $exz->plosh;
        $stoim = $exz->sum;


//        if ($valid::Validation($vys, $shyr))
//        {

            echo "Площадь окна: " . $ploshad . " м&#178;" . '<br>' . "Цвет профиля: " . $profi . '<br>';
            echo "Стоимость: " . $stoim . " грн" . '<br>'. '<br>'. '<br>' ;
//        }
//        else{
//            echo "Error";
//        }

        $inf=$oknaCal->createArr($exz);

        echo "Инфа о Вашем окне: ";
        foreach($inf as $i){
            echo $i . ",  ";
        }
        ?>





    </div>
</div>
<!--</content>-->
<footer>
    <a href="http://vk.com/ernieisonfire"><center>Copyrights reserved ©</center></a>
</footer>

</body>
</html>