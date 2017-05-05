<!DOCTYPE html>
<title>Dashboard</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>
    <?php 
    include "includes/db.php";
    session_start(); 
    if (isset($_SESSION["name"]) === false){
        header('location: http://localhost/SUPA%20Work/db_website/forbidden.php');
    }else{
        $email = $_SESSION["email"];
        $name = $_SESSION["name"];
        $is_p_set = isset($_POST["pword"]);
        $errorMessage = "";
        if($is_p_set){
            $pword = trim($_POST["pword"]);
            $pword2 = trim($_POST["pword2"]);
            if($pword !== $pword2){
                $errorMessage .= "<div class='alert-danger'>The passwords do not match</div>";
            }else{
                $newPword = sha1($pword);
                $query = "UPDATE `db1_users` SET `password`='$newPword' WHERE `db1_users`.`email` = '$email';";
                //die( $query);Debug the $query
                if(mysqli_query($mysqli , $query)){//Even though it is a logical condition, it will still change the password. "Handshake"
                    echo "<div class='alert-success'>Passwords were successfully changed</div>";
                }else{
                    echo "Error: " . $query . "<br/>" . mysqli_error($mysqli);
                }
            }
        }
    }
    ?>
    <div class='container'>
        <div class='col-xs-2'></div>
        <div class='well' class='col-xs-8'>
            <div class='text-center'>
                <form method="post" id="form">
                    New Password:<input type="password" name="pword" id="pword" value="" style="width:180px"/><br />
                    Confirm Password:<input type="password" name="pword2" id="pword2" value="" style="width:180px"/><br />
                    <input type="submit"  value="Submit" id="submit" />

                </form>
            </div>
        </div>
    </div>
</body>
</html>