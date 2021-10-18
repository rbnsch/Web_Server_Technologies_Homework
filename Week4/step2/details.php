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

            $id = $_POST["id"];
        
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
                //perform an select querry to get the record of the inputted id
                $sql = "SELECT * FROM personnel WHERE Id=$id";
                
                $personnel = $conn->query($sql);
                
                //check if record is availible, if not print an error
                if(empty($row = $personnel->fetch())) {
                    echo "Error! Invalid ID! Please check your input!";
                } else {
                    //print record in a html table
                    //start html table
                    echo "<table>\n";
                    //first table row
                    echo "<tr>\n";
                    echo "<td>";
                    echo $row["First Name"] . "  ";
                    echo "</td>";
                    echo "<td>";
                    echo $row["Last Name"] . "  ";
                    echo "</td>";
                    echo "<td>";
                    echo $row["Location (City)"] . "  ";
                    echo "</td>";
                    echo "<td>";
                    echo $row["Job Title"] . "  ";
                    echo "</td>";
                    echo "<td>";
                    echo $row["Salary"] . "<br>";
                    echo "</td>";
                    echo "</tr>\n";
                    //end html table
                    echo "</table>\n";
                    }
                
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

