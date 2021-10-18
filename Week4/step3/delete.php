<head>
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
                //perform an delete querry to delete the record of the submitted id
                $sql = "DELETE FROM personnel WHERE Id='$id'";
                
                $count=$conn->exec($sql);
                
                //check if the deletion was successfull and give the user feedback
                if($count == 0) {
                    echo "Error! No record deleted! Please check the inserted ID!";
                } else {
                    echo "Successfully deleted!";
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

