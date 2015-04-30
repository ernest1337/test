<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/style.css">
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
            <a href="/24april.html"><img src="http://gloria-project.eu/wp-content/uploads/2012/06/logo-256-transp.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li><a href="/24april.html"><span class="glyphicon glyphicon-header" aria-hidden="true"></span> Home</a></li>
                <li class="active"><a><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Info</a></li>
                <li><a href="table.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Table</a></li>
                <li><a href="table2.php"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Table 2</a></li>
                <li><a href="forma.html"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Form</a></li>
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
            echo "ФИО: " . $_POST[fio];
            ?>
        </div>

        <!-- List group -->
        <ul class="list-group">
            <li class="list-group-item">
                <?php
                echo "Факультет: " . $_POST[fak];
                ?>
            </li>
            <li class="list-group-item">
                <?php
                echo "Специальность: " . $_POST[spec];
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
