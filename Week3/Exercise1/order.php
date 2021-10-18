<html>
    <body>
        <pre><?php
            //access recieved orders via http and displey them
            echo "Order:<br><br><br>";
            echo "Garnish:<br><br>" . $_POST["garnish"] . "<br><br><br>";
            echo "Dessert: <br><br>";
            
            foreach ($_POST["dessert"] as $dessert) {
                echo $dessert . "<br>";
            }
            
            
            echo "<br><br>Coffee:<br><br>" . $_POST["coffee"];
        ?>
        </pre>
    </body>
</html>
