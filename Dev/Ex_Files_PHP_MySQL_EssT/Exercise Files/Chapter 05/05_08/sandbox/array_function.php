<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>Array Functions</title>
    </head>
    <body>
        <?php $numbers = [8,23,15,42,16,4];?>
        Count:<?php echo count($numbers);?><br/>
        Max value:<?php echo max($numbers);?><br/>
        Min value:<?php echo min($numbers);?><br/>
        <pre>
         Sort:<?php sort($numbers); print_r($numbers); ?><br/>
        <?php rsort($numbers); print_r($numbers);?><br/>
        <?php ?><br/>
        </pre>
        <br/>
        Implode: <?php echo $num_string = implode(" * " , $numbers); ?><br/>
        Explode: <?php print_r(explode(" * ",$num_string)); ?><br/>
        15 in array?: <?php echo in_array(15,$numbers); //returns T/F?><br/>
        19 in array?: <?php echo in_array(19,$numbers); //returns T/F?><br/>
        <!-- array_keys returns all keys of an array, array_values returns all values of an array, array_push pushes an element onto the end of an array, array_pop takes an element off the end of an array array_shift puts element in front of an array, array_unshift takes the beginning of the array away, array_unique makes sure all values in an array are unique(don't repeat) array_search looks for a given value and returns its key, array_rand takes one or more random entries out of the array -->
        <?php ?><br/>
        
    </body>
</html>
