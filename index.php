<html>
<body>

    <form action="" method="post">
        Width: <input type="number" name="x"> <br>
        Height: <input  type="number" name="y"> <br>
        SEED: <input  type="number" name="seed"> <br>
        <input type="submit">
    </form>

    <?php
        $map = array();
        $x = $_POST["x"];
        $y = $_POST["y"];
        $seed = $_POST["seed"];
        $image = imagecreatetruecolor($x, $y);
        //phpinfo();
        //imagejpeg($image);

        function setMap(){
            $x = $GLOBALS['x'];
            $y = $GLOBALS['y'];
            $map =  array_fill(0,$x,NULL);
            //echo "test $x, $y";
            for($i=0; $i < $x; ++$i){
                $map[$i] = array_fill(0,$y,array('nothing',0));
                //echo "test $i <br>";
            }
            $GLOBALS['map'] = $map;
        }

        function setSeed(){
            if($GLOBALS['seed'] == NULL) {
                $GLOBALS['seed'] = rand();
            }
            srand($GLOBALS['seed']);
            $test = rand();
            //echo "test: $test <br>";
        }

        function applyRoads($width, $height, $inputMap){
            $map = $inputMap;

            $largeRoads = rand(1,sqrt(max($width, $height)));// * rand(1,3);
            $smallRoads = rand(5,10)*$largeRoads;
            echo "Large Roads: $largeRoads <br> Small Roads: $smallRoads <br>";


            return $map;
        }

        /*function applyMajorRoads(){
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
        }*/


        setSeed();
        setMap();
        $map = applyRoads($x,$y, $map);



        
    
        //echo "$x x $y <br>";
        //setSeed();
        //setMap();
        //check if there is already a saved map for that seed, if so just load
        //applyMajorRoads();
        //applyMinorRoads();
        //exportMapToImage();
        //displayMapToUser();

        //takes $image and turns it into jpeg
        //imagejpeg($image);
        
        
        echo "Seed: $seed <br>";

        //print_r($map);
        //echo $map[0][0]. "";
    
    ?>

</body>
</html> 