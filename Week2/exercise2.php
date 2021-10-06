<html>
    <body>
        <pre><?php
                $a = array("a"=>array("b"=>0, "c"=>1), "b"=>array("e"=>2, "c"=>array("b"=>3)));
                //show the structure of the array
                var_dump($a);
                //displaying the result
                echo $a["b"]["c"]["b"];
            ?>
        </pre>
    </body>
</html>
