<html>
<body>

    <form action="index.php" method="post">
        X: <input type="number" name="x"> <br>
        Y: <input  type="number" name="y"> <br>
        SEED: <input  type="number" name="seed"> <br>
        <input type="submit">
    </form>

    <?php
        $map = array();
        $x = $_POST["x"];
        $y = $_POST["y"];
        $seed = $_POST["seed"];

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

        function applyMajorRoads(){
            //get number of large roads
            $numberOfRoads = 0;
            placeMajorRoads($numberOfRoads);
            growRoads();
        }

        function placeMajorRoads($numberOfRoads){

        }

        function growRoads(){

        }

        function placeMinorRoads($numberOfRoads){

        }

        function applyMinorRoads(){
            $numberOfRoads = 0;
            placeMinorRoads($numberOfRoads);
            growRoads();
        }

        function exportMapToImage(){
            //convert $map from type and weights into rgb
            //create image
            //edit image
        }

        function displayMapToUser(){
            //load image based on seed
            //display to user
        }

        
    
        //echo "$x x $y <br>";
        setMap();
        //check if there is alreadya  saved map for that seed, if so just load
        applyMajorRoads();
        applyMinorRoads();
        exportMapToImage();
        displayMapToUser();

        //print_r($map);
        //echo $map[0][0]. "";
    
    ?>

</body>
</html> 