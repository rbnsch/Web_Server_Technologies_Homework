<html>
    <body>
        <pre><?php
                
                //this funtion prints the user-input and the result
                function output($operation)
                {
                    global $result;
                    echo "The result of ";
                    echo $_POST["firstNumber"];
                    echo " $operation ";
                    echo $_POST["secondNumber"];
                    echo " is $result";
                }
                
                //this function calculates the result depending on the user input and calls output() to print the result
                function calc() {
                    global $result;
                    switch($_POST["operation"]) {
                    case "Add":
                        $result = $_POST["firstNumber"] + $_POST["secondNumber"];
                        output("+");
                        break;
                    case "Subtract":
                        $result = $_POST["firstNumber"] - $_POST["secondNumber"];
                        output("-");
                        break;
                    case "Multiply":
                        $result = $_POST["firstNumber"] * $_POST["secondNumber"];
                        output("*");
                        break;
                    case "Divide":
                        //Division by zero is not allowed
                        if($_POST["secondNumber"] == 0) {
                            echo "Error! Do not divide by zero!";
                        } else {
                            $result = $_POST["firstNumber"] / $_POST["secondNumber"];
                            output("/");
                        }
                        break;
                    }
                }
                
                //this function checks if the user input is valid and returns true if it is
                function isValidInput() {
                    //Checks if the input fields are empty
                    if(empty($_POST["firstNumber"]) && empty($_POST["secondNumber"])) {
                        echo "Error! Please fill out both input fields!";
                        return False;
                    }
                    
                    if(empty($_POST["firstNumber"])) {
                        echo "Error! Please fill out the first input field!";
                        return False;
                    }
                    
                    if(empty($_POST["secondNumber"])) {
                        echo "Error! Please fill out the second input field!";
                        return False;
                    }
                    
                    
                    
                    //Checks if the input fileds contain numbers
                    if (!is_numeric($_POST["firstNumber"]) && !is_numeric($_POST["secondNumber"])) {
                        echo "Error! Please fill both input fields with numbers!";
                        return False;
                    }
                    
                    if (!is_numeric($_POST["firstNumber"])) {
                        echo "Error! Please fill in a number in the first input field!";
                        return False;
                    }
                    
                    if (!is_numeric($_POST["secondNumber"])) {
                        echo "Error! Please fill in a number in the second input field!";
                        return False;
                    }
                    

                    return True;
                }

                //if the user input is valid, the calculation is done
                if(isValidInput()) {
                    calc();
                }
                
  
                
            ?>
        </pre>
    </body>
</html>
