<html>
    <body>
     <pre><?php //using the pre tag to use \t
     
            //defining prices, counts, tax in percentage and tip in percentage
            $priceHamburger = 4.95;
            $priceMilkshake = 1.95;
            $priceCola = 0.85;

            $countsHamburger = 2;
            $countsMilkshake = 1;
            $countsCola = 1;
            
            
            $purchaseTax = 17.5;
            $preTaxTip = 16;
            
            //calculate total cost
            $totalCost= $priceHamburger * $countsHamburger + $priceMilkshake * $countsMilkshake + $priceCola * $countsCola;

            //calculate costs with tax
            $totalTaxCost = $totalCost * (1 + ($purchaseTax / 100));
            
            //calculate tip
            $preTaxTipCost = $totalCost * ($preTaxTip / 100);

            
            //output results
            echo "Two hamburgers at $4.95 each\t= \$", $countsHamburger * $priceHamburger;
            echo "<br>";

            echo "One milkshake at $1.95\t\t= \$", $countsMilkshake * $priceMilkshake;
            echo "<br>";
            echo "One cola at $0.85\t\t= \$", $countsCola * $priceCola;
            echo "<br>";
            
            echo "<br>";
            echo "Total cost before tax\t\t= \$", $totalCost;
            echo "<br>";
            
            echo "<br>";
            echo "Total cost with tax\t\t= \$", round($totalTaxCost, 2); //Costs are rounded to two decimal places
            echo "<br>";
            
            echo "<br>";
            echo "Pre-tax tip\t\t\t= \$", round($preTaxTipCost, 2);

        ?>
        </pre>
    </body>
</html>
