<!DOCTYPE html>
<title>Login</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>
    <?php 
    include "includes/db.php";
    session_start(); 
    $is_submitted = isset($_POST['email']);
    $errormessage = "";
    if($is_submitted){
        $email = trim($_POST['email']);
        $pword = trim($_POST['pword']);
        if(strlen($email) < 3)
            $errormessage .= "Email must be longer than 3 characters<br/>"; 
        if(strlen($pword) < 3)
            $errormessage .= "Password must be longer than 3 characters<br/>";
        if(strlen($errormessage) === 0){
            $newPword = sha1($pword);
            $query = "SELECT * FROM `db1_users` WHERE `password`= '$newPword' AND `email` = '$email'";
            if($result = mysqli_query($mysqli, $query)){
                $numRowsSelected = mysqli_num_rows($result);
                if($numRowsSelected){
                    $row = mysqli_fetch_assoc($result); //Gets the values for the specifc user
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    header("location: http://localhost/SUPA%20Work/db_website/welcome.php");
                }
                $errormessage = "The email or password is incorrect";
            }else{
                $errormessage = "Couldn't connect to the server.";
            }
        }
    }

    ?>
    <form id="regform" method="post" style="margen:20px">
        <input type="password" name="pword" id="pword" placeholder="Password" />
        <br />
        <input type="text" name="email" id="email" placeholder="Email" />
        <br />
        <input type="submit" value="Submit" />
    </form>

</body>
</html>