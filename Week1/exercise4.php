<html>
    <body>
        <?php
            $string = " &*%(Robin Schmidt)@#$ ";
            $i = 0;
            $started = false;
            $result = "";
            
            //i.)

            while(true) {

                //check if end of the name is reached and terminate loop
                if($string[$i] == ")") {
                    break;
                }
                
                //if name is reached, append each charctar of the string
                if($started == true) {
                    $result = $result . $string[$i];
                }
                
                //check if start of name ist reached
                if($string[$i] == "(") {
                    $started = true;
                }
                
                $i++;

            }
             
            echo "$result";
            echo "<br>";
            
            //ii.)
            
            //reset/override all used variables
            $i = strlen($string);
            $result = "";
            $started = false;
            
            
            while(true) {
                
                //check if end of the name is reached and terminate loop
                if($string[$i] == "(") {
                    break;
                }
                
                //if name is reached, append each charctar of the string
                if($started == true) {
                    $result = $string[$i] . $result;
                }
                
                //check if start of name ist reached
                if($string[$i] == ")") {
                    $started = true;
                }
                
                $i--;
                
            }
            
            echo "$result";
            
            
        ?>
    </body>
</html>
