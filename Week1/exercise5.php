<html>
    <body>
        <?php
            $url = "http://www.aubg.edu/Robin/Schmidt";
            
            //divide url in 4 parts
            $helper = explode("/",$url,4);

            //getting the right parts of the divides url
            $result = explode("/",$helper[3]);
            
            //printing results
            echo '<pre>';
            print_r($result);
            echo '</pre>';

        ?>
    </body>
</html>
