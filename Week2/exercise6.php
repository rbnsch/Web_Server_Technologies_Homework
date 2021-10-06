<html>
    <body>
    
        <?php
            $fruitErr = $vegErr = "";
            $correctInput = False;
            //check if Submit-Button was pressed
            if(isset($_POST["Submit"])) {
                $correctInput = True;
                //check if a fruit was selected
                if(empty($_POST["fruit"])) {
                    $fruitErr = "Error! Please select a fruit!";
                    $correctInput = False;
                }
                
                //check if a vegetable was select
                if (empty($_POST["vegetable"])) {
                    $vegErr = "Error! Please select a vegetable!";
                    $correctInput = False;
                }
            } 
        ?>
    
    
        <!--Define HTML-Form with radio buttons, pull down menue and a submit button. Inputs are sent with a post request to the server-->
        <form action="" method="post">
            What fruits do you like the best?
            <br>
            <input type="radio" name="fruit" value="apple" /> apple
            <input type="radio" name="fruit" value="orange" /> orange
            <input type="radio" name="fruit" value="banana" /> banana
            <input type="radio" name="fruit" value="kiwi" /> kiwi
            <input type="radio" name="fruit" value="melon" /> melon
            <span style="color: red"><?php echo $fruitErr;?></span>
            <br>
            What is your favourite salad vegetable?
            <br>
            <select name="vegetable">
                <option value=""></option>
                <option value="tomatoes">tomatoes</option>
                <option value="spinach">spinach</option>
                <option value="cucumber">cucumber</option>
                <option value="radish">radish</option>
                <option value="rukola">rukola</option>
            </select>
            <span style="color: red"><?php echo $vegErr;?></span>
            <br>
            <input type="submit"h name="Submit"/>
        </form>
    
        <?php
            //if both properties are selected print user selection
            if ($correctInput == True) {
                echo "Your favourite fruit is ";
                echo $_POST["fruit"];
                echo "<br>Your favorite salad vegetable is ";
                echo $_POST["vegetable"];
            }
        ?>
        
    </body>
</html>
