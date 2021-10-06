<html>
    <body>
        <pre><?php
                $mixed_up = ["rubbish", "parrot", 101, ["coke can", 8, ":)", "sludge", ["stuff", "cotton wool", ["ANSWER!", "grade"], "dungeon", "bird", "mouse"], "rock"], "glitter", "sunlight", 3.142];
                //displaying the array
                var_dump($mixed_up);
                //displaying the ANSWER by [] notation
                echo $mixed_up[3][4][2][0];
                
            ?>
        </pre>
    </body>
</html>
