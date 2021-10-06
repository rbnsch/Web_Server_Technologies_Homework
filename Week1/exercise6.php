<head>
    <style type="text/css">
        body {
            font-family: Verdana sans-serif;
        }
        td {
            border: solid 5px white;
        }
    </style>
    <body>
        <?php
            //start html table
            echo "<table>\n";
            
            //first table row
            echo "<tr>\n";
            //print red in the first cell
            echo "<td>red</td>";
            //color the second cell red
            echo "<td style = \"width:40px; background-color:red\"></td>\n";
            echo "</tr>\n";
            
            
            //second table row
            echo "<tr>\n";
            echo "<td>white</td>";
            echo "<td style = \"width:40px; background-color:white\"></td>\n";
            echo "</tr>\n";
            
            
            //third table row
            echo "<tr>\n";
            echo "<td>blue</td>";
            echo "<td style = \"width:40px; background-color:blue\"></td>\n";
            echo "</tr>\n";
            
            
            //end html table
            echo "</table>\n";
        ?>

    </body>
</head>

