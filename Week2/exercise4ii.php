<html>
    <body>
        <pre><?php
            $monthDays = array ('January'   => 31, 'February' => 28, 'March'     => 31, 'April'    => 30,                    'May'       => 31, 'June'     => 30,                     'July'      => 31, 'August'   => 31,                    'September' => 30, 'October'  => 31,                     'November'  => 30, 'December' => 31);
            
            /*this function searches in the global array $monthDays for the month with the highest and lowest count of days
            
            an array with the name of the month and the count of days of the shortest and longest month is returned
             */
            function getMinMaxMonth() {
                global $monthDays;
                $min = 100;
                $max = 0;
                $minMonth = "";
                $maxMonth = "";
                foreach($monthDays as $month => $days)
                {
                    //if a month has more days then the month before, that month is the new maxMonth
                    if($days > $max) {
                        $max = $days;
                        $maxMonth = $month;
                    }
                    
                    //if a month has less days then the month before, that month is the new minMonth
                    if($days < $min) {
                        $min = $days;
                        $minMonth = $month;
                    }
                }
                return array($minMonth, $min, $maxMonth, $max);
            }

            //calling getMinMaxMonth() to get the shortest and longest month of a year and displaying the results after that
            $minMaxMonth = getMinMaxMonth();
            
            echo "$minMaxMonth[0] has the minimum number of days: $minMaxMonth[1]<br>";
            
            echo "$minMaxMonth[2] has the maximum number of days: $minMaxMonth[3]<br>";
            ?>
        </pre>
    </body>
</html>
