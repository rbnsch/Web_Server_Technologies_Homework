<html>
    <body>
        <pre><?php
            //This function checks, if all fields of the form are filled out and returns a bool as result
            function isNotEmpty() {
                $filledOut = True;
                
                //check username field
                if(empty($_POST["username"])) {
                    echo "Error! Please enter a username!<br>";
                    $filledOut = False;
                }
                
                //check password field
                if(empty($_POST["password"])) {
                    echo "Error! Please enter a password!<br>";
                    $filledOut = False;
                }
                
                //check password repeat field
                if(empty($_POST["passwordRepeat"])) {
                    echo "Error! Please repeat your password!<br>";
                    $filledOut = False;
                }
                return $filledOut;
            
            }
            
            //validae if the username is correct and return a boolean
            function validateUsername() {
                global $username;
                //check if the selected username don't matches with the regex and print then an error
                if(!preg_match("/^([a-zA-Z]+)$/",$username)) {
                    echo "Error! Please enter a valid username!<br>";
                    return False;
                }
                return True;
            }
            
            //This checks if the user selected password is correct and if it was correctly repeated
            function validatePassword() {
                global $password;
                global $passwordRepeat;
                $passwordOk = True;
                //source: https://stackoverflow.com/questions/8141125/regex-for-password-php
                $uppercase = preg_match('@[A-Z]@', $password);
                $lowercase = preg_match('@[a-z]@', $password);
                $number    = preg_match('@[0-9]@', $password);

                //check if the password contains uppercase, lowercase, number and if it has 8 or more characters
                if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
                    echo "Error! Please enter a valid password!<br>";
                    
                    //check which type of letter is missing to print a usefull error message
                    if(!$uppercase) {
                    echo "Error! No uppercase letter in the password!<br>";
                    }
                    
                    if(!$lowercase) {
                        echo "Error! No lowercase letter in the password!<br>";
                    }
                    
                    if(!$number) {
                        echo "Error! No number in the password!<br>";
                    }
                    
                    if(strlen($password) < 8) {
                        echo "Error! The password is to short!<br>";
                    }
                    $passwordOk = False;
                }
                
                //check if both passwords match
                if (strcmp($password, $passwordRepeat) != 0) {
                    echo "Error! Passwords do not match!<br>";
                    $passwordOk = False;
                }
                
                return $passwordOk;
                
            }
            
            
            if (isNotEmpty()) {
                //read http post messages
                $username = $_POST["username"];
                $password = $_POST["password"];
                $passwordRepeat = $_POST["passwordRepeat"];
                //validate username and password
                //if they are correct display concratulations
                if (validateUsername() && validatePassword()) {
                    echo "Concratulations! You registered successfully!";
                }

            }
            
            
        ?>
        </pre>
    </body>
</html>
