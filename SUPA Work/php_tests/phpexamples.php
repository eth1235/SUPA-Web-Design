<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Php Examples</title>
        <style>
            body{

            }
            a{
                color:black;
            }
            a:hover{
                color:black;
                text-decoration: none;

            }
            .nav.nav-tabs a{
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 2px;
                padding-bottom: 2px;
                color:white;
                font-size: 16px;
            }
            .nav.nav-tabs a:hover{
                color:black;
                background-color: white;
            }
            .nav.nav-tabs{
                position: fixed;
                background-color: black;
                border-bottom: .5px solid black;
                border-top: .5px solid black;
                z-index: 1;
            }
            .nav.nav-tabs.dropdown.dropdown-menu a {
                background-color: black;
            }
            h1,h2,h3,p{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                    Data Types <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" style="background-color:black">
                    <a href="#string">String</a>
                    <a href="#ints">Integers</a>
                    <a href="#floats">Floats</a>
                    <a href="#arrays">Arrays</a>
                    <a href="#bools">Booleans</a>
                    <a href="#null">Null</a>
                    <a href="#typejc">Changing Types</a><br/>
                    <a href="#constants">Constants</a>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                    Control Structures <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" style="background-color:black">
                    <a href="#if">If Statements</a>
                    <a href="#else">Else and Elseif Statements</a>
                    <a href="#logic_op">Logical Operators</a>
                    <a href="#switch">Switch Statement</a>
                </ul>
            </li>
        </ul>
        <div class="jumbotron">
            <h1>PHP Basics</h1>
            <p>By Ethan Evans</p>
        </div>

        <div class="containter">
            <h1>Data Types</h1>
            <!--STRINGS-->
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="string"></a>
                    <h2>Strings</h2>
                    <div class="well">
                        <?php 
                        $string = "I'm a string!"; //Use "", not ''
                        echo $string;
                        ?><br/>
                        Use "" more than ''<br/>
                        <br/>
                        Concatination: Uses a "." to join strings<br/>
                        <?php 
                        $phrase = "Hello";
                        echo "Original String: " . $phrase . "<br/>";
                        echo $phrase . "! " . $phrase . " there!";
                        echo "<br/>$phrase Again<br />";
                        echo '$phrase Again<br />';
                        echo "{$phrase} Again<br />";
                        ?><br/>
                        <h3>String Functions:</h3>
                        <?php 
                        $first = "The quick brown fox";
                        $second = " jumped over the lazy dog.";
                        $third = $first; //Sets third = first
                        $third .= $second; //Concatinates second onto third
                        ?>
                        first = <?php echo $first; ?><br/>
                        second = <?php echo $second; ?><br/>
                        third = first, third .= second = <?php echo $third; ?><br/>
                        <br/> 
                        <?php echo "<strong><i>Original String: </i></strong>" . $third;
                        ?><br/>
                        <strong><i>Lowercase [strtolower(string)]:</i></strong> <?php echo strtolower($third); ?><br />
                        <strong><i>Uppercase [strtoupper(string)]:</i></strong> <?php echo strtoupper($third); ?><br />
                        <strong><i>Uppercase first letter [ucfirst(string)]:</i></strong> <?php echo ucfirst($third); ?><br />
                        <strong><i>Uppercase first letter of words[ucwords(string)]:</i></strong> <?php echo ucwords($third); ?><br />
                        <br/>
                        <strong><i>Length [strlen(string)]: </i></strong> <?php echo strlen($third); ?><br />
                        <strong><i>Trim [trim(string)]:</i></strong> <?php echo "A" . trim(" B C D ") . "E"; ?><br />
                        <strong><i>Find a string in a string [strstr(bigString , lilString)]:</i></strong> <?php echo strstr($third, "brown"); //removes rest of string in front of it?><br /> 
                        <strong><i>Replace by string [str_replace(string1 , string2)]:</i></strong> <?php echo str_replace("quick", "super-fast", $third); //changes first string for the second string ?><br />
                        <br/>
                        <strong><i>Repeat [str_repeat(string , number)]: </i></strong><?php echo str_repeat($third, 2); ?><br />
                        <strong><i>Make substring [substr(string , first location , second location)]:</i></strong> <?php echo substr($third, 5, 10); ?><br />
                        <strong><i>Find position [strpos(haystack , needle)]: </i></strong><?php echo strpos($third, "brown"); ?><br />
                        <strong><i>Find character [strchr(haystack , needle)]: </i></strong><?php echo strchr($third, "z"); ?><br />
                        <strong><i>Find last occurance of a string [strrpos(haystack , needle)]: </i></strong><?php echo strrpos($third,"e"); ?><br/>


                    </div>
                </div>
            </div>

            <!--INTEGERS-->
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="ints"></a>
                    <h2>Integer:</h2> 
                    <div class="well">
                        <?php 
                        $var1 = 3;
                        $var2 = 4;
                        echo "<strong><i>Basic int: Var1 = </i></strong> {$var1} <strong><i> Var2 = </i></strong>{$var2} ";
                        ?><br/>
                        <strong><i>Basic Math: </i></strong> <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br/>
                        <h3>Math Functions:</h3> 
                        <strong><i>Absolute value of -300 [abs(num)]: </i></strong> <?php echo abs(0 - 300); ?><br/>
                        <strong><i>Exponential [pow(num , power)]: </i></strong><?php echo pow(2,8); ?><br/>
                        <strong><i>Square root [sqrt(num)]: </i></strong><?php echo sqrt(100); ?><br/>
                        <strong><i>Modulo [fmod(num , mod_num): </i></strong><?php echo fmod(20,7); ?><br/>
                        <strong><i>Random [rand()]: </i></strong><?php echo rand(); ?><br/>
                        <strong><i>Random with min and max [rand(lower_num , upper_num)]: </i></strong><?php echo rand(1,10); ?><br/>
                        <strong><i>Var2 += 4 : </i></strong><?php $var2 += 4; echo $var2; ?><br/>
                        <strong><i>Var2 -= 4 : </i></strong><?php $var2 -= 4; echo $var2; ?><br/>
                        <strong><i>Var2 *= 4 : </i></strong><?php $var2 *= 4; echo $var2; ?><br/>
                        <strong><i>Var2 /= 4 : </i></strong><?php $var2 /= 4; echo $var2; ?><br/>
                        <u>^Changes the actual value of the variable</u><br/>
                        <strong><i>Increment (++): </i></strong> <?php $var2++; echo $var2; ?><br/>
                        <strong><i>Decrement (--): </i></strong> <?php $var2--; echo $var2; ?><br/>

                    </div>
                </div>
            </div>
            <!--FLOATS-->

            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="floats"></a>
                    <h2>Floats</h2>
                    <div class="well">
                        <strong><i>Examples: </i></strong><br/>
                        <?php echo "float = ". $float = 3.1415; ?><br/>
                        <?php echo "float2 = ". 4/3; ?><br/>
                        <?php $integer = 3;?>
                        <strong><i>Still can't divide by 0</i></strong><br/>
                        <br/>
                        <?php echo"<strong><i>Original Float: </i></strong>{$float}<br/><strong><i>Original Integer: </i></strong>{$integer}<br/>";
                        ?>
                        <strong><i>Round [round(float , roundto)]: </i></strong><?php echo round($float, 2); ?><br/>
                        <strong><i>Ceiling - rounds up to nearest integer [ceil(float)]: </i></strong><?php echo ceil($float); ?><br/>
                        <strong><i>Floor - rounds down to nearest integer [floor(float)]: </i></strong><?php echo floor($float); ?><br/>
                        <br/>
                        <h3>Logic Tests</h3>
                        <strong><i>Is the variable an integer [is_int(variable)]: </i></strong><br/>
                        <?php echo "Is {$integer} an integer? " . is_int($integer); ?><br/>
                        <?php echo "Is {$float} an integer? " . is_int($float); ?><br/>
                        <?php echo "Is \"string\" an integer? " . is_int("string") ?><br/>
                        <?php echo "Is true an integer? " . is_int(true) ?><br/>
                        <strong><i>Is the variable a float [is_float(variable)]:</i></strong><br/>
                        <?php echo "Is {$integer} float? " . is_float($integer); ?><br/>
                        <?php echo "Is {$float} float? " . is_float($float); ?><br/>
                        <?php echo "Is \"string\" a float? " . is_float("string") ?><br/>
                        <?php echo "Is true a float? " . is_float(true) ?><br/>
                        <strong><i>Is the variable numeric [is_numeric(variable)]:</i></strong>
                        <?php echo "Is {$integer} numeric? " . is_numeric($integer); ?><br/>
                        <?php echo "Is {$float} numeric? " . is_numeric($float); ?><br/>
                        <?php echo "Is \"string\" numeric? " . is_numeric("string") ?><br/>
                        <?php echo "Is true numeric? " . is_numeric(true) ?><br/>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <!--ARRAYS-->
                    <a name="arrays"></a>
                    <h2>Arrays</h2>
                    <div class="well">
                        <strong><i>Basic Array Notation: </i></strong> $new_array = array(values). This adds values with keys of 0 up.<br/>
                        Ex: $numbers = array(4,8,15,16,23,42). $numbers[0] = <?php $numbers = array(4,8,15,16,23,42); echo $numbers[0];?><br/>
                        <strong>Arrays can have mixed data types.</strong><br/>
                        Ex: $mixed = array(6, "fox", "dog", array("x", "y", "z")). $mixed[2] = <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); echo $mixed[2]; ?><br/>
                        <strong>Access nested arrays by using a second key value</strong><br/>
                        Ex: $mixed[3][1] = <?php echo $mixed[3][1]; ?><br />
                        <strong>Change values by setting a key to a new value. Add a new value by just having an empty key.</strong><br/>  
                        Ex: $mixed[2] = "cat", $mixed[4] = "mouse", $mixed[] = "horse" (will add to the end of the array)<?php $mixed[2] = "cat"; $mixed[4] = "mouse"; $mixed[] = "horse";?>
                        <strong>Can't echo an array, it creates a string conversion error.</strong><br/>
                        <strong><i>print_r(array)</i></strong> lets you echo arrays. Combine with pre tags to read better.
                        <pre>
                        <?php echo print_r($mixed); ?>
                        </pre><br/>
                        Shortcut to write arrays: $new_array = [values]; 
                        <h3>Associative Arrays</h3>
                        Arrays with specific keys, not numerical.
                        Ex: $assoc = array("first_name" => "Ethan", "last_name" => "Evans") <br/>
                        <?php $assoc = array("first_name" => "Ethan", "last_name" => "Evans");?>
                        "first_name" and "last_name" replace 0 and 1 as the keys<br/>
                        $assoc["first_name"] = <? echo $assoc["first_name"]; ?><br/>
                        $assoc["first_name"] . " " . $assoc["last_name"] =  <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br/>
                        Change values the same way: $assoc["first_name"] = "Larry"<?php $assoc["first_name"] = "Larry"; ?><br/>
                        $assoc["first_name"] . " " . $assoc["last_name"] =  <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br/>
                        <h3>Array Functions</h3>
                        <strong><i>Original Array: </i></strong>$numbers = array(8,23,15,42,16,4)<br/>
                        <?php $numbers = array(8,23,15,42,16,4); ?>

                        <strong><i>Count the number of values in an array [count(array)]:</i></strong><?php echo count($numbers); ?><br />
                        <strong><i>Max value [max(array)]:</i></strong><?php echo max($numbers);?><br />
                        <strong><i>Min value [min(array)]:</i></strong><?php echo min($numbers);?><br />
                        <br />
                        <strong><i>Sort values in ascending order [sort(array)]:</i></strong> 
                        <pre>
		                <?php sort($numbers);  print_r($numbers); ?><br />
		                </pre>
                        <strong><i>Reverse sort values in descending order [rsort(array)]:</i></strong>
                        <pre>
                        <?php rsort($numbers); print_r($numbers); ?><br />
                        </pre>
                        <br />
                        <strong><i>Implode converts an array into a string with a seperator [implode(seperator_string , array)]: </i></strong><?php echo $num_string = implode(" * ", $numbers); ?><br />
                        <strong><i>Explode converts a string into an array with a seperator to divide the values [explode(seperator_string , array)]:</i></strong>
                        <pre>
                        <?php print_r(explode(" * ", $num_string)); ?>
                        </pre>
                        Implode and Explode are opposites to one another<br/>
                        Check values in an array by using <strong><i>in_array(value , array ):</i></strong><br/>
                        15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?><br />
                        19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?><br />
                        <br/>
                        Original Array:
                        <?php $array = array("user" => "eth1235", "password" => "drowssap", "balance" => 45075, "num1" => 2, "num2" => 2);?><br/>
                        <pre>
                        <?php echo print_r($array); ?>
                        </pre>
                        <strong><i>array_keys(array) </i></strong>returns all keys of an array<br/>
                        <pre>
                        <?php echo print_r(array_keys($array)); ?><br/>
                        </pre>
                        <strong><i>array_values(array) </i></strong>returns all values of an array<br/>
                        <pre>
                        <?php echo print_r(array_values($array));?><br/>
                        </pre>
                        <strong><i>array_push(array , value) </i></strong>pushes an element onto the end of an array<br/>
                        <strong>CANNOT ADD A KEY</strong><br/>
                        Ex: "deposit" => 250<br/>
                        <pre>
                        <?php array_push($array, "active"); echo print_r($array); ?><br/>
                        </pre>
                        <strong><i>array_pop(array) </i></strong>takes an element off the end of an array<br/>
                        <pre>
                        <?php array_pop($array); echo print_r($array); ?><br/>
                        </pre>
                        <strong><i>array_unshift(array , value) </i></strong>puts a value in front of an array<br/>
                        <pre>
                        <?php array_unshift($array,"active"); echo print_r($array);?><br/>
                        </pre>
                        <strong><i>array_shift(array) </i></strong>takes the beginning value of the array away<br/>
                        <pre>
                        <?php array_shift($array); echo print_r($array);?><br/>
                        </pre>
                        <strong><i>array_unique(array) </i></strong><br/>makes sure all values in an array are unique(don't repeat)
                        <pre>
                        <?php echo print_r(array_unique($array));?><br/>
                        </pre>
                        <strong><i>array_search(needle , haystack) </i></strong>looks for a given value and returns its key<br/>
                        <?php echo "The key for 'eth1235' = " . array_search("eth1235", $array)?><br/>

                        <strong><i>array_rand(array , number) </i></strong>takes one or more random entries out of the array<br/>
                        <pre>
                        <?php echo print_r(array_rand($array,2));?><br/>
                        </pre>
                    </div>
                </div>
            </div>

            <!--BOOLEANS-->
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="bools"></a>
                    <h2>Boolean:</h2> 
                    <div class="well">
                        bool1 = true, bool2 = false
                        <?php $bool1 = true; $bool2 = false; //could also be TRUE ?><br/>
                        bool1 = <?php echo $bool1; ?><br/>
                        bool2 = <?php echo $bool2; ?><br/>
                        <strong><i>is_bool(value) </i></strong> checks if a value is a boolean
                        <br/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="null"></a>
                    <h2>Null</h2>
                    <div class="well">
                        Null represents a variable with no value given to it.<br/>
                        Just like a boolean, it can be written <strong>null </strong> or <strong>NULL</strong><br/>
                        <h3>Functions</h3>
                        <?php $var1 = null; $var2 = ""; ?>
                        Ex: var1 = null, var2 = "", var3 is not defined.<br/>
                        <br/>
                        <strong><i>is_null(value) </i></strong> is used to see if a value is null.<br/>
                        <pre>
                        var1 null? <?php echo is_null($var1); ?><br/>        
                        var2 null? <?php echo is_null($var2); ?><br/>        
                        var3 null? <?php echo is_null($var3); ?><br/> 
                        </pre>
                        var3 returns a <u>notice</u>, not an <u>error</u>, as well as returning <u>true</u>. This is because the variable has not been defined, but also tells us the variable has not been created either.<br/>
                        <br/>
                        <strong><i>issset(value) </i></strong> is used to see if a value has been set.<br/>
                        <pre>
                        var1 is set? <?php echo isset($var1); ?><br />
                        var2 is set? <?php echo isset($var2); ?><br />
                        var3 is set? <?php echo isset($var3); ?><br /> 
                        </pre>
                        var2 returns true because it is set as an empty string, while var1 and var3 have not been set.<br/>
                        <br/>
                        var3 = "0" in the next example.<br/>
                        <?php $var3 = "0"; ?>
                        <strong><i>empty(value) </i></strong> checks to see if a value is "empty".<br/>
                        This means if the value is "", null, 0, 0.0, "0", false, or array().<br/>
                        <pre>
                        var1 empty? <?php echo empty($var1); ?><br />
                        var2 empty? <?php echo empty($var2); ?><br />
                        var3 empty? <?php echo empty($var3); ?><br />
                        </pre>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="typejc"></a>
                    <h2>Type Juggling / Casting</h2>
                    <div class="well">
                        <h4>Type Juggling</h4>
                        <u>Type Juggling:</u> when PHP converts variable types automatically. Not always accurate.
                        <strong><i>gettype(var) </i></strong> gets the type of variable<br/>
                        count = "2"<br/>
                        <?php $count = "2";?><br/>
                        Type: <?php echo gettype($count); ?><br/>
                        <u>Add 3 to count</u><br/>
                        <?php $count += 3;?>
                        Type: <?php echo gettype($count); ?><br/>
                        <u>Count changes from a string to an integer</u><br/>
                        <br/>
                        <u>Concatinate cats = "I have" count "cats."</u>
                        <?php $cats = "I have " . $count ." cats."; ?><br/>
                        Cats: <?php echo gettype($cats);?><br/>
                        <br/>
                        <h4>Type Casting</h4>
                        <u>Two types of casting:</u><br/>
                        <br/>
                        <h5>Explicit</h5>
                        <strong><i>settype(var , type) </i></strong> changes the type of variable.<br/>
                        <?php settype($count,"integer");?>
                        Count: <?php echo gettype($count);?><br/>
                        <br/>
                        <strong><span style = "font-size:18">OR</span></strong><br/>
                        <br/>
                        <h5>Implicit</h5>
                        <strong><i>var = (type) var</i></strong> changes the type without using a function.<br/>
                        <?php $count2 = (string) $count;?>
                        Count: <?php echo gettype($count); ?><br/>
                        Count2: <?php echo gettype($count2); ?><br/>
                        <br/>
                        <u>Difference between two types of casting:</u><br/>
                        <br/>
                        test1 & test2 = 3<br/>
                        <?php $test1 = 3;?>
                        <?php $test2 = 3;?>
                        <?php settype($test1, "string")?>
                        <?php (string) $test2; ?>
                        (Explicit) test1: <?php echo gettype($test1);?><br/>
                        (Implicit) test2: <?php echo gettype($test2);?><br/>
                        <br/>
                        <u>Explicit</u> will permenantly change the type while <u>Implicit</u> will change the type only for that line.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="constants"></a>
                    <h2>Constants</h2>
                    <div class="well">
                        Constants don't change, kept at the same value<br/>
                        Written in all cap without a $ sign<br/>
                        Can only be defined with a function<br/>
                        Ex: MAX_WIDTH<br/>
                        <br/>
                        <strong><i>define("constant" , value)</i></strong> is used to define constants.
                        MAX_WIDTH = <?php 
                        define("MAX_WIDTH",980);
                        echo MAX_WIDTH; 
                        ?><br/>
                        <br/>
                        <u>Cannot change value or redefine the constant after it has been defined</u> (i.e. MAX_WIDTH += 1)<br/>
                        Constants stayed defined for as long as PHP is running. They can be redefined when the script runs again.<br/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="if"></a>
                    <h2>If Statements</h2>
                    <div class="well">
                        <?php
                        $a = 4;
                        $b = 3;
                        if ($a > $b){
                            echo "a is larger than b";
                        }
                        ?><br/>
                        <?php?><br/>
                        <?php?><br/>
                        <?php?><br/>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="else"></a>
                    <h2>PHP and mySQL</h2>
                    <div class="well">
                        includes basically copy pastes a file into the code. This helps with setting up databases. Should be in a file close to the page your working on<br/>
                        Ex: include "includes/db.php".
                        Sessions are how websites track your activities across pages. It creates a temporary text file on the server. It is not avaliable to the public. It is based on the browswer, not the computer. These are cache files.<br/>
                        session_start() is how you start the session. Needs to be started on every new page.<br/>
                        $_SESSION[variable] = value is how you store values.<br/>
                        sha1 is a hasing function that makes passwords unreadable for anyone who hacks into the website.<br/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="else"></a>
                    <h2>Else and Elseif Statements</h2>
                    <div class="well">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="logic_op"></a>
                    <h2>Logical Operators</h2>
                    <div class="well">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-0"></div>
                <div class='col-md-8 col-xs-0'>
                    <a name="switch"></a>
                    <h2>Switch Statements</h2>
                    <div class="well">

                    </div>
                </div>
            </div>

            <!--
<div class="row">
<div class="col-md-2 col-xs-0"></div>
<div class='col-md-8 col-xs-0'>
<a name="switch"></a>
<h2>Blank </h2>
<div class="well">

</div>
</div>
</div>
-->
        </div> <!--Container End-->
    </body>
</html>
