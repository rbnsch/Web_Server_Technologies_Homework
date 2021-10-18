<head>
    <body>
        <?php
            //get values from http post request
            $id = $_POST["id"];
            $firstName = $_POST["First_Name"];
            $secondName = $_POST["Second_Name"];
            $locationCity = $_POST["Location_(City)"];
            $jobTitle = $_POST["Job_Title"];
            $salary = $_POST["Salary"];

            
        
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
                //perform an update querry to update the record of the submitted id with the updated data
                $sql = "UPDATE personnel SET `First Name` = '$firstName', `Last Name` = '$secondName', `Location (City)` = '$locationCity', `Job Title` = '$jobTitle', `Salary` = '$salary' WHERE Id='$id'";
                

                $count=$conn->exec($sql);
                
                //check if the update was successfull and give the user feedback
                if($count == 0) {
                    echo "Error! No record updated! Please check the inserted ID!";
                } else {
                    echo "Successfully updated!";
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

