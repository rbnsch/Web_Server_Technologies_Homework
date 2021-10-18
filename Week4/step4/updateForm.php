<head>
    <body>
        <?php
        
            include "credentials.php";
            $id = $_POST["id"];
            
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
                $sql = "SELECT * FROM personnel WHERE Id='$id'";
                $personnel = $conn->query($sql);

                //get all record in variables to fill out the form
                if(empty($row = $personnel->fetch( PDO::FETCH_ASSOC ))) {
                    echo "Error! Invalid ID! Please check your input!";
                } else {

                    $firstName = $row["First Name"];
                    $secondName = $row["Last Name"];
                    $location = $row["Location (City)"];
                    $jobTitle = $row["Job Title"];
                    $salary = $row["Salary"];
                }
                
            }
            catch (PDOException $e) {
                //print errors
                echo "Not able to execute following command:<br>";
                echo $sql . "<br>";
                echo $e->getMessage();
            }
            
        ?>
        <h3>Edit record:</h3>
        
        <form action="update.php" method="post">
            Id:
            <input type="text" name="id" value="<?php echo $id; ?>" readonly />
            <br>
            Please enter First Name: 
            <input type="text" name="First Name" value="<?php echo $firstName; ?>" />
            <br>
            Please enter Second Name: 
            <input type="text" name="Second Name" value="<?php echo $secondName; ?>" />
            <br>
            Please enter Location (City): 
            <input type="text" name="Location (City)" value="<?php echo $location; ?>" />
            <br>
            Please enter Job Title: 
            <input type="text" name="Job Title" value="<?php echo $jobTitle; ?>" />
            <br>
            Please enter Salary: 
            <input type="text" name="Salary" value="<?php echo $salary; ?>" />
            <br>
            <input type="submit" value="Submit"/>
        </form>


    </body>
</head>

