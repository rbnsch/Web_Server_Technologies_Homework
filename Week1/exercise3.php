<html>
    <body>
    <pre><?php
            $ReturnValue1 = 2 == 3;
            if ($ReturnValue1 === TRUE) {
               echo 'The value is TRUE';
            } else {
                echo 'The value is FALSE';
            }
            echo "<br>";
            $ReturnValue2 = "2" + "3";
            print_r($ReturnValue2);
            echo "<br>";
            $ReturnValue3 = 2 >= 3;
            if ($ReturnValue3 === TRUE) {
               echo 'The value is TRUE';
            } else {
                echo 'The value is FALSE';
            }
            echo "<br>";
            $ReturnValue4 = 2 <= 3;
            echo "$ReturnValue4";
            echo "<br>";
            $ReturnValue5 = 2 + 3;
            echo "$ReturnValue5";
            echo "<br>";
            $ReturnValue6 = (2 >= 3) && (2 > 3);
                        if ($ReturnValue6 === TRUE) {
               echo 'The value is TRUE';
            } else {
                echo 'The value is FALSE';
            }
            echo "<br>";
            $ReturnValue7 = (2 >= 3) || (2 > 3);
                        if ($ReturnValue7 === TRUE) {
               echo 'The value is TRUE';
            } else {
                echo 'The value is FALSE';
            }

        ?>
        </pre>
    </body>
</html>
