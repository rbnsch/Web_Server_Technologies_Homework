<head>
    <!-- Styling for table -->
    <style type="text/css">
        body {
            font-family: Verdana sans-serif;
        }
        td {
            border: solid 5px white;
        }
        table {
            border: 1px solid black;
        }
    </style>
    <body>
        <?php
        
            include "credentials.php";
            
            //connect to database
            try {
                $conn = new PDO($dsn, $dbUser, $dbPass);
            }
            catch (PDOException $e) {
                //print errors
                echo "Can not conntect to database:<br>";
                echo $e->getMessage();
            }
            
            
            try {
                //perform an select querry to get all records of the table personnel
                $sql = "SELECT * FROM personnel";
                $personnel = $conn->query($sql);
            
                //start html table
                echo "<table>\n";
                //show all records in the html table using a while loop and the fetch function
                while ($row = $personnel->fetch()) {
                    echo "<tr>\n";
                    echo "<td>";
                    echo $row["Id"] . "  ";
                    echo "</td>";
                    echo "<td>";
                    echo $row["First Name"] . "  ";
                    echo "</td>";
                    echo "<td>";
                    echo $row["Last Name"] . "  ";
                    echo "</td>";
                    echo "</tr>\n";
                    $count++;
                }
                
                //end html table
                echo "</table>\n";
            }
            catch (PDOException $e) {
                //print errors
                echo "Not able to execute following command:<br>";
                echo $sql . "<br>";
                echo $e->getMessage();
            }
            
        ?>

    </body>
</head>

