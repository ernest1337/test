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

        <form method="post" action="k_oplate.php" class="form-horizontal">
            <div class="form-group">
                <label for="vys" class="col-sm-2 control-label">Высота окна в метрах</label>
                <div class="col-sm-10">
                    <input type="text" name="vys" class="form-control" placeholder=" Высота окна">
                </div>
            </div>
            <div class="form-group">
                <label for="shir" class="col-sm-2 control-label">Ширина окна в метрах</label>
                <div class="col-sm-10">
                    <input type="text" name="shir" class="form-control" placeholder=" Ширина окна">
                </div>
            </div>
            <div class="form-group">
                <label for="profil" class="col-sm-2 control-label">Профиль</label>
                <div class="col-sm-10">
                    <select class="col-md-6" name="profil">
                        <?php
                        include("okna.php");
                        foreach($profil as $key=>$value){
                            echo '<option>'  . $key;
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="stek" class="col-sm-2 control-label">Кол-во стекол</label>
                <div class="col-sm-10">
                    <select class="col-md-6" name="stek">
                        <?php
//                        include("okna.php");
                        foreach($stek as $st){
                            echo '<option>' . $st;
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="pov" class="col-sm-2 control-label">Повороты</label>
                <div class="col-sm-10">
                    <!--<input type="text" name="spec" class="form-control" placeholder="Специальность">-->
                    <select class="col-md-6" name="pov">
                        <?php
                        foreach($povoroty as $key=>$value){
                            echo "<option>" . $key;
                        }
                        ?>
                    </select>

                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success">Ok</button>
                </div>
            </div>
        </form>
    </div><!--FORM-->
</div>
<!--</content>-->
<footer>
    <a href="http://vk.com/ernieisonfire"><center>Copyrights reserved ©</center></a>
</footer>

</body>
</html>