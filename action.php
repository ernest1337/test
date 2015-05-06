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
                <li class="active"><a><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Info</a></li>
                <li><a href="table.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Table</a></li>
                <li><a href="table2.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Table 2</a></li>
                <li><a href="forma.html"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Form</a></li>
                <li><a href="words.html"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Sentence</a></li>
            </ul>
<!--            <ul class="nav navbar-nav navbar-right">-->
<!--                <li class="active"><a>Info</a></li>-->
<!--            </ul>-->
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading"> <?php
            $nameProverka= ( ! preg_match('/[а-я\s]/i', $_POST['fio'])) ? FALSE : TRUE;
            $nameProverka2= ( ! preg_match('/[a-zA-Z\W]/i', $_POST['fio'])) ? TRUE : FALSE;

//            $nameProverka3= (  preg_match('/[^а-яА-Я]/', $_POST['fio']));
//            $nameProverka3=(!preg_match("/^[".chr(0x7F)."-".chr(0xff)."_-]+$/",$_POST['fio']));
            $nameProverka3=(preg_match('/^[а-яёА-ЯЁ\s]+$/', $_POST['fio']));
//            var_dump($nameProverka3);
//            $nameProverka= ( ! preg_match("/^([а-яА-я])+$/i", $_POST['fio'])) ? FALSE : TRUE;
//                if($nameProverka and $nameProverka2) {
                if($nameProverka3) {
                    echo "Имя: " . $_POST['fio'];
                }
                else{
                    echo "ВНИМАНИЕ!! Пожалуйста, введите своё имя на русском";
                }
            ?>
        </div>

        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">
                <?php
//                if (gettype($_POST['voz']=='int') and $_POST['voz']>15){
                if(filter_var($_POST['voz'],FILTER_VALIDATE_INT) and $_POST['voz']>15 and $_POST['voz']<50) {
                    echo "Возраст: " . $_POST['voz'];
                }
                else{
                    echo "ВНИМАНИЕ!! Вы неправильно указали возраст";
                }
                ?>
            </li>
            <li class="list-group-item">
                <?php
                echo "Факультет: " . $_POST['fak'];
                ?>
            </li>
            <li class="list-group-item">
                <?php
                echo "Специальность: " . $_POST['spec'];
                ?>
            </li>
            <li class="list-group-item">
                <?php
                echo "Курс: " . $_POST[kurs];
                ?>
            </li>
            <li class="list-group-item">
                <?php
                    echo date('<p> Время : l jS \of F Y h:i:s A .</p>')
                 ?>
            </li>
        </ul>
    </div>




</div>
<!--</content>-->
<footer>
    <a href="http://vk.com/ernieisonfire"><center>Copyrights reserved ©</center></a>
</footer>

</body>
</html>
