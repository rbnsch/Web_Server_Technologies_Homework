<html>
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
            
            //This function shows the content of the table personnel with a html form as in exercise 3 1.)
            function printTable() {
                global $conn;
                try {
                    $sql = "SELECT * FROM personnel";
                    $personnel = $conn->query($sql);
                    $count = 1;
                
                    //start html table
                    echo "<table>\n";

                    while ($row = $personnel->fetch()) {
                        //first table row
                        echo "<tr>\n";
                        echo "<td>";
                        echo $count . "  ";
                        echo "</td>";
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
                        $count++;
                    }
                    
                    //end html table
                    echo "</table>\n";
                }
                catch (PDOException $e) {
                    echo "Not able to execute following command:<br>";
                    echo $sql . "<br>";
                    echo $e->getMessage();
                }
            }
            
            //This function inserts the user input recieved over a http post message in the table personnel
            function insertNewRecord() {
                global $firstName;
                global $secondName;
                global $locationCity;
                global $jobTitle;
                global $salary;
                global $conn;
                
                //defining sql statment to insert new record
                $sql = "INSERT INTO `personnel` (`Id`, `First Name`, `Last Name`, `Location (City)`, `Job Title`, `Salary`) VALUES (NULL, '$firstName', '$secondName', '$locationCity', '$jobTitle', '$salary')";
                
                //Executing sql statment
                try {
                    $conn->exec($sql);
                }
                catch (PDOException $e) {
                    echo "Error! Can not insert new record to database:<br>";
                    echo $sql . "<br>";
                    echo $e->getMessage();
                }
                
            }
            
            //This function conncects with the database
            function connectDatabase() {
                global $conn;
                global $dsn;
                global $dbUser;
                global $dbPass;
                try {
                    $conn = new PDO($dsn, $dbUser, $dbPass);
                }
                catch (PDOException $e) {
                    echo "Can not conntect to database:<br>";
                    echo $e->getMessage();
                }
            }
            
            
            $firstName = $_POST["First_Name"];
            $secondName = $_POST["Second_Name"];
            $locationCity = $_POST["Location_(City)"];
            $jobTitle = $_POST["Job_Title"];
            $salary = $_POST["Salary"];
            connectDatabase();
            insertNewRecord();
            printTable();

            
            
        ?>
        
    </body>
</html>
