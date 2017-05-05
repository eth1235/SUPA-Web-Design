<!DOCTYPE html>
<title>Add an Entry</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){

        $("#warn").hide();

        $("#form").submit(function(){            
            var isEntry = $("#entry").val().length == 0;
            console.log(isEntry + "test");
            //event.preventDefault();

            if(isEntry){
                event.preventDefault();
                $("#warn").show();
            }else{
                $("#warn").hide();
            }
        });
    });
</script>

<?php 
include "includes/db.php";
session_start();
$isLoggedIn = isset($_SESSION["email"]);
if(!$isLoggedIn){
    header ("location: http://localhost/SUPA%20Work/db_website/forbidden.php");
}
$isSubmitted = isset($_POST["entry"]);
if($isSubmitted){
    $entry = trim($_POST["entry"]);
    $error = "";
    $e_type;
    $query = "INSERT INTO `diary_entries` (`entry`, `email`, `timestamp`) VALUES ('$entry', 'etheth@blah.com', CURRENT_TIMESTAMP);";
    if(strlen($entry) === 0){
        $error .= "Please insert text in order to make a new entry.<br/>";
            $e_type = "danger";
    }else{
        if(mysqli_query($mysqli,$query)){
            $error = "The entry was successfully submitted!";
            $e_type = "success";
        }else{
            $error .= "Could not connect to the server<br/>";
            $e_type = "danger";
        }
    }
    echo "<div class='alert-$e_type'>$error</div>";
}
?>
</head>

<body>
    <div class='container'>
        <div class='col-xs-2'></div>
        <div class='well' class='col-xs-8'>
            <div class='text-center'>
                <form method='post' id="form">
                    <textarea name='entry' id="entry" class="form-control col-xs-12" rows="7" placeholder="Enter your new diary entry here"></textarea><br/>
                    <input type="submit" value="Add New Entry"/>
                </form>
            </div>
        </div>
        <div class="alert-danger" id="warn">There is no entry</div>
    </div>
</body>
</html>