<html>
    <body>
        <pre><?php
                $string = "Fourscore and seven years ago our fathers brought forth, on this continent, a new nation, conceived in liberty, and dedicated to the proposition that all men are created equal.";
                $reverseString = "";
                
                //iterate through the given string form behind
                for ($i = strlen($string); $i >= 0; $i--)
                {
                    //push every character at the back of the new string
                    $reverseString = $reverseString . $string[$i];
                }
                
                //print results
                echo $string;
                echo "<br>";
                echo $reverseString;
                
            ?>
        </pre>
    </body>
</html>
