<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise 5-1: For Loop</title>
    </head>
    <body>
        <h3>Grocery list:</h3>
        <?php
        //Instructions: for-loop to display unordered list
        //if statement to only show non-blank lines as list items
        
        echo "<ul>";
        for($ii = 1; $ii <=7; $ii++)
        {
            $item_html_name = 'item'.$ii;
            $item = $_POST[$item_html_name];
            
            if (!empty($item))
            {
                print "<li>$item</li>";
            }
        }
        echo "</ul>";
        ?>
    </body>
</html>
