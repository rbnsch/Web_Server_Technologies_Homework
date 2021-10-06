<html>
    <body>
        <pre><?php
                $months = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

                //iterrate through the months to find July and its key
                foreach ($months as $month) {
                    if($month === 'July') {
                        //array_keys() returns an array with the key of July as the first element
                        $key = array_keys($months, $month)[0];
                    }
                }
                
                //remove the found month (july) from the array
                unset($months[$key]);
                var_dump($months);
            ?>
        </pre>
    </body>
</html>
