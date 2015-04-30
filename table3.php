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


    echo '<table class="table table-bordered">';
    for($stolb1=1; $stolb1<=$_POST['stolb']; $stolb1++){
        echo '<tr>';
            for ($strok1 = 1; $strok1 <= $_POST['strok']; $strok1++) {
                $rez = $stolb1 * $strok1;
                if($_POST['diag']=='option1') {
                    if ($_POST['col'] == 'Coral') {
                        $color = ($strok1 == $stolb1) ? 'style="background-color: coral;"' : '';
                    }
                    if ($_POST['col'] == 'Crimson') {
                        $color = ($strok1 == $stolb1) ? 'style="background-color: crimson"' : '';
                    }
                    if ($_POST['col'] == 'Blue') {
                        $color = ($strok1 == $stolb1) ? 'style="background-color: #337ab7;"' : '';
                    }
                    if ($_POST['col'] == 'Green') {
                        $color = ($strok1 == $stolb1) ? 'style="background-color: greenyellow;"' : '';
                    }
                }

                if($_POST['diag']=='option2'){
                    if((($strok1%2)==($stolb1%2))){
                        if ($_POST['col'] == 'Green') {
                            $color = 'style="background-color: greenyellow;"';
                        }
                        if ($_POST['col'] == 'Coral') {
                            $color = 'style="background-color: coral;"';
                        }
                        if ($_POST['col'] == 'Crimson') {
                            $color = 'style="background-color: crimson;"';
                        }
                        if ($_POST['col'] == 'Blue') {
                            $color = 'style="background-color: #337ab7;"';
                        }

                    }
                    else{
                        $color='';
                    }
                }
                if($_POST['diag']=='option3'){

                    $tochka = explode("; " , $_POST['vydel']);
//                    print_r($tochka);
                    foreach ($tochka as $toc) {
                        $koord[] = explode("," , $toc);
//                       print_r($koord);
                    }
                    $color = '';
                    for($i=0; $i<= count($koord); $i++) {
//                        var_dump($strok1,$strok1 == $koord[$i][0] , $stolb1,$stolb1 == $koord[$i][1]);
//                        echo "<br>";
                        if ($strok1 == $koord[$i][0] and $stolb1 == $koord[$i][1]) {
                            $color = 'style="background-color: #337ab7;"';

                        }

                    }

//                    COLORING
                }
                echo "<td " . $color . ">" . $rez . ' ' . ' </td>';

            }

        echo '<br />';
        echo '</tr>';
    }
    echo '</table>';
    if($_POST[nazv]==true) {
        echo "Таблица умножения размером " . $_POST[stolb] . " на " . $_POST[strok];
    }
    ?>




</div>
<!--</content>-->
<footer>
    <a href="http://vk.com/ernieisonfire"><center>Copyrights reserved ©</center></a>
</footer>

</body>
</html>
