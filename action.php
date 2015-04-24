<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/public/css/bootstrap.css">
        <link rel="stylesheet" href="/public/css/style.css">
        <title>Info Page</title>
    </head>
    <body>
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
                </ul>
            </div>
        </div>
    </body>
</html>
