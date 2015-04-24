<html><?php

    for($i=0; $i<=100; $i++){
        if ($i%2 == 0){
            echo $i;
            $j++;
            if($j<5){
                echo "  ";
            }
            else{
                echo  "<br />";
                $j=0;
            }
        }
    }
    $hello="world";
    $world="hello";
    echo $world . "  " . $$world;
?>
</html>