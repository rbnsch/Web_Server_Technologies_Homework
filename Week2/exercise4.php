<html>
    <body>
        <pre><?php
                $monthDays = array ('January'   => 31, 'February' => 28,
                    'March'     => 31, 'April'    => 30,                    'May'       => 31, 'June'     => 30,                     'July'      => 31, 'August'   => 31,                    'September' => 30, 'October'  => 31,                     'November'  => 30, 'December' => 31);
                
                //iterating through the array of months to display them
                foreach($monthDays as $month => $days)
                {
                    echo "$month has $days days<br>";
                }
                
            ?>
        </pre>
    </body>
</html>
