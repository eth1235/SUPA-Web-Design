<!DOCTYPE html>
<title>Registration form</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Registration  </h1>

    <?php
    include "includes/db.php";
    session_start();
    $bFormSubmitted = isset( $_POST['name']) ;
    $numErrors = 0;
    if( $bFormSubmitted  )
    {
        //email form validation
        $email1 = trim( $_POST['email']) ; //trim removes leading/trailing spaces
        $email2 = trim( $_POST['email2']) ;
        $password1 = trim( $_POST['pword']);
        $password2 = trim( $_POST['pword2']);
        $name= trim( $_POST['name']);

        //first let's see if the two emails are the same
        if($email1 !== $email2 )
        {
            echo '<div class="warning"> Your emails do not match</div>';
            $numErrors++;
        }	
        else if($password1 !== $password2 )
        {
            echo '<div class="warning"> Your passowrds do not match.</div>';
            $numErrors++;
        }	
        else if( strlen($email1) < 5)
        {
            echo '<div class="warning"> Your email must be at least 5 characters in length. </div>';
            $numErrors++;
        }	

        else if( strlen($password1) < 5)
        {
            echo '<div class="warning"> Your email must be at least 5 characters in length. </div>';
            $numErrors++;
        }	

        // find position of "@" in $email
        $atPosition = strpos($email1, '@');
        $dotPosition= strrpos($email1, '.');

        $userNameInPassword = strpos($_POST['name'], $_POST['pword'] ) ;



        if( $atPosition == false )
        {
            echo '<div class="warning"> Your Email Address should have an "@" </div>';
            $numErrors++;
        }	
        else if( $atPosition > $dotPosition)
        {
            echo '<div class="warning"> Invalid Email Address </div>';
            $numErrors++;
        }	
    } //end of $bFormSubmitted
    if( $bFormSubmitted && $numErrors < 1)
    {
        echo '<br /> we should register this user! ';	
        $query = "INSERT INTO `db1_users` (`name`, `email`, `password`, `gpa`, `gradelevel`) VALUES ('" . $name . "', '" . $email1 . "', '" . $password1 ."', '4.0', '11');";
        //$mysqli is a handler that represents the database
        if (mysqli_query($mysqli, $query)){
            echo "Mew Recprd created successfully";
            if (mysqli_affected_rows( $mysqli ) == 1){
                $_SESSION['name'] = $name;
                $_SESSION["email"] = $email1;
                header('location: dashboard.php');
                //header('location: welcome.php');
            }
        }else{
            echo "Error: " . $query . "<br>" . mysqli_error($mysqli);
        }
    }

    ?>

    <?php
    $testName= "foo" . time();
    $testEmail="fa@." . time();
    $testPassw= "chickenchickenchicken";

    ?>

    <form id="regform" method="post" style="margen:20px">

        <input type="text" name="name" id="name"  placeholder="Enter your name" />

        <br />
        <input type="password" name="pword" id="pword"  placeholder="your password" />

        <br />
        <input type="password" name="pword2" id="pword2"  placeholder="confirm your password" />


        <br />

        <input type="text" name="email" id="email" placeholder="email address" />

        <br />
        <input type="text" name="email2" id="email2"  placeholder="confirm email address" />

        <br />
        <input type="submit" value="Submit" />
    </form>
    <script> 
        $(document).ready(function(){
            $( "#regform" ).submit(function( event ) {
                var formOk = true;
                var email = "" + $.trim($("#email").val() );
                var email2 = "" + $.trim($("#email2").val() );

                if( email!= email2)
                {
                    alert("Your emails do not match");
                    formOk=false;
                }
                else if( email.indexOf("@") < 0)
                {
                    alert("Your email does not have an @ symbol");
                    formOk=false;
                }
                if(formOk==false)
                    event.preventDefault();
            })
        })
    </script> 
</body>
</html>