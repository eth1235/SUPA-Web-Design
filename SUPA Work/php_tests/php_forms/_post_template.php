<!DOCTYPE html>
<title>Blank Form </title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>
    <h1>Forms </h1>
    <?php
    function form_ok(){
        //$_POST is an associative array, where we refer to the key of "num1"
        $bFormSubmitted = isset($_POST["num1"]);
        return ($bFormSubmitted && strlen( $_POST["num1"]) > 0);
    }
    if(form_ok()){
        $numLetters = strlen( $_POST["num1"]);
        $num = $_POST["num1"];
        echo "You entered <b> " . $num . "</b>";
        echo " which has " . $numLetters . " letters";
    }

    ?>    
    <form method="post">
       <!-- name is for php, id is for javascript -->
        Value : <input type="text" name="num1" id="num1" placeholder="Enter a Value" />
        <input type="submit"  id="submit" value=" Click to Submit" />

    </form>


</body>
</html>