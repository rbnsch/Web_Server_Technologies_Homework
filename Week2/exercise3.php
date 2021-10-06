<html>
    <body>
        <pre><?php
                $multiArray = array ( "colour" => array ( "a" => "White", "b" => "Green", "c" => "Red"),                                 "numbers" => array ( 1, 2, 3, 4, 5, 6 ),                                 "holes" => array ( "First", 5 => "Second", "Third"));
                
                //looping through the outer array
                foreach ($multiArray as $type => $content)
                {
                    //displaying all keys of the outer array
                    echo $type;
                    echo "<br>";
                    
                    //looping through the inner arrays
                    foreach ($content as $key => $value)
                    {
                        //displaying all keys and values of the inner arrays
                        echo "\t$key => $value<br>";
                    }
                    echo "<br>";
                }
                
            ?>
        </pre>
    </body>
</html>
