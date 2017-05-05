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
    <h1>Forms</h1>
    <?php
    $bformSubmitted = isset($_POST["name"]);
    if ($bformSubmitted){
        $name = $_POST["name"];
        if(strlen($_POST["name"] > 3)){
            
        }else{
            echo "<div class='warning'>ERROR, USERNAME IS NOT LONGER THAN 3 CHARACTERS, PLEASE MAKE USERNAME LARGER THAN 3 CHARACTERS</div>";
        }
    }

    
    ?>    
    <form method="post">
        <label>Name :</label> <input type="text" value="" name="name" id="name" placeholder="Enter your Name" />
        <input type="submit"  id="submit" value=" Click to Submit" />

    </form>


</body>
</html>