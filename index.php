<html>
<body>

    <form action="index.php" method="post">
        X: <input type="number" name="x"> <br>
        Y: <input  type="number" name="y"> <br>
        <input type="submit">
    </form>

    <?php
        $map = array();
        $x = $_POST["x"];
        $y = $_POST["y"];

        function setMap(){
            $x = $GLOBALS['x'];
            $y = $GLOBALS['y'];
            $map =  array_fill(0,$x,NULL);
            echo "test $x, $y";
            for($i=0; $i < $x; ++$i){
                $map[$i] = array_fill(0,$y,array('nothing',0));
                echo "test $i <br>";
            }
            $GLOBALS['map'] = $map;
        }
    
        //echo "$x x $y <br>";
        setMap();

        //print_r($map);
        //echo $map[0][0]. "";
    
    ?>

</body>
</html> 