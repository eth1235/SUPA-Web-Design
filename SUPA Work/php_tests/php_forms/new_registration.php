<!DOCTYPE html>
<title>Blank Form </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--Start Javascript-->
<script> 
    $(document).ready(function(){
        //Hides JS warnings
        $('#warn1').hide();
        $('#warn2').hide();
        $('#warn3').hide();
        $('#warn4').hide();
        $('#warn5').hide();
        $('#warn6').hide();
        $('#warn7').hide();
        $('#warn8').hide();
        $('#warn9').hide();
        $('#warn10').hide();
        $('#warn11').hide();
        $('#warn12').hide();
        $('#warn13').hide();
        $('#warn14').hide();
        //Booleans
        var formOk = true;
        //Strings
        var uName = "";
        var pword1 = "";
        var pword2 = "";
        var email1 = "";
        var email2 = "";
        var month = "";
        var day = "";
        var year = "";
        var secureQuest = "";
        var secureAns = "";
        var didRead = "";

        //Checks if form can submit
        $("#form").submit(function(){
            formOk = true;
            uName = $("#name").val();
            pword1 = $("#pword").val();
            pword2 = $("#pword2").val();
            email1 = $("#email").val();
            email2 = $("#email2").val();
            month = $("#month").val();
            day = $("#day").val();
            year = $("#year").val();
            secureQuest = $("#secureQuest").val();
            secureAns = $("#secureAns").val();
            didRead = $('#didRead').attr('checked');
            var accepted_emails = "yahoo.com hotmail.com aol.com gmail.com msn.com";
            var email_domain = email1.substring(email1.indexOf("@") + 1);
            if( uName === "" || pword1 === "" || pword2 === "" || email1 === "" || email2 === "" || month === "" || day === "" || year === "" || secureQuest === "" || secureAns === ""  ){
                $('#warn1').show(); 
                formOk = false;
                $
            }else{
                $('#warn1').hide();
            }
            //Checks if emails match
            if( email1 !== email2){
                $('#warn2').show();
                formOk= false;  
            }else{
                $('#warn2').hide();
            }
            //Checks if email is longer than 5 characters
            if( email1.length < 5){
                $('#warn3').show();
                formOk = false;
            }else{
                $('#warn3').hide();
            }
            //Checks if email has @ symbol
            if(email1.indexOf("@") == -1){
                $("#warn4").show();
                formOk = false;
            }else{
                $('#warn4').hide();
            }
            //Checks if email has a .
            if(email1.indexOf(".") == -1){
                $("#warn5").show();
                formOk = false;
            }else{
                $('#warn5').hide();
            }
            //Checks if Username is more than 5 characters
            if(uName.length < 6 ){
                formOk = false;
                $('#warn6').show();
            }else{
                $('#warn6').hide();
            }
            //Checks if passwords match
            if(pword1 !== pword2){
                $("#warn7").show();
                formOk = false;
            }else{
                $('#warn7').hide();
            }
            //Checks if password is more than 4 characters
            if(pword1.length < 4){
                $("#warn8").show();
                formOk = false;
            }else{
                $('#warn8').hide();
            }
            //Checks if password = username
            if(pword1.includes(uName) && uName !== ""){
                $("#warn9").show();
                formOk = false;
            }else{
                $('#warn9').hide();
            }
            //Checks if email domain is acceptable
            if(!accepted_emails.includes(email_domain)){
                $("#warn10").show();
                formOk = false;
            }else{
                $("#warn10").hide();
            }
            //Checks if the date is invalid
            if( ( (month == 4 || month == 6 || month == 9 || month == 11 ) && day > 30 ) || ( month == 2 && day > 28 ) || day >31 || month > 12 || year < 1900 || year > 2017 ){
                $("#warn11").show();
                formok = false;
            }else{
                $("#warn11").hide(); 
            }
            //Checks if the security question was chosen
            if(secureQuest == null){
                $("#warn12").show();
                formok = false;
            }else{
                $("#warn12").hide();
            }
            //Checks if you read the terms and conditions
            if(!didRead){
                $("#warn13").show();
                formok = false;
            }else{
                $("#warn13").hide();
            }
            //Check if you are old enough 
            if( year >= 2004 && year <= 2017){
                $('#warn14').show();
                formOk = false;
            }else{
                $('#warn14').hide();
            }
            if(formOk == false){
                event.preventDefault();
                alert("Form not submitted");
            }else{
                alert( "Form submitted" );
            }
        });

    });
</script> 
<!-- End Javascript -->
</head>

<body>
    <!-- Start PHP -->
    <?php
    //Main variables
    $isformSubmitted = isset($_POST["name"]);
    $name = "";
    $p_word1 = "";
    $p_word2 = "";
    $email1 = "";
    $email2 = "";
    $month = "";
    $day = "";
    $year = "";
    $secureQuest = "";
    $secureAns = "";
    $didRead = "";
    //Secondary variables
    $accepted_emails = "yahoo.com hotmail.com aol.com gmail.com msn.com";
    //Runs when form is submitted
    function runChecks(){
        global $uName, $pWord1, $pWord2, $email1, $email2, $month, $day, $year, $secureQuest, $secureAns, $didRead, $accepted_emails;
        //Defining variables
        $name = trim($_POST["name"]);
        $p_word1 = trim($_POST["pword"]);
        $p_word2 = trim($_POST["pword2"]);
        $email1 = trim($_POST["email"]);
        $email2 = trim($_POST["email2"]);
        $month = trim($_POST["month"]);
        $day = trim($_POST["day"]);
        $year = trim($_POST["year"]);
        $secureQuest = isset($_POST["secureQuest"]);
        $secureAns = trim($_POST["secureAns"]);
        $didRead = isset($_POST["didRead"]);
        //Secondary variables 2
        $at_pos = strpos($email1, "@");
        $email_domain = substr($email1, $at_pos + 1);
        //if test checks if important variables are empty, will not proceed without them
        if(empty($name) || empty($p_word1) || empty($p_word2) || empty($email1) || empty($email2) || empty($month) || empty($day) || empty($year) || empty($secureQuest) || empty($secureAns)){
            echo "<div class='alert-warning'>Missing a field</div>";
        }
        else{
            //Username less than 6
            if(strlen($name) < 6)
                echo "<div class='alert-warning'>Username must be at least 6 characters</div>";
            //Password less than 4
            if(strlen($p_word1) < 4)
                echo "<div class='alert-warning'>Password must be at least 4 characters</div>";
            //Passwords do not match
            if($p_word1 !== $p_word2)
                echo "<div class='alert-warning'>Passwords do not match</div>";
            //Username in password
            if(strstr($p_word1,$name))
                echo "<div class='alert-warning'>Cannot have the username in your password</div>";
            //Emails do not match
            if($email1 !== $email2)
                echo "<div class='alert-warning'>Your emails do not match</div>";
            //Email is less than 5 characters
            if(strlen($email1) < 5)
                echo "<div class='alert-warning'>Email must be at least 5 characters</div>";
            //Email does not contains an @
            if($at_pos == false)
                echo "<div class='alert-warning'>The email is missing an \"@\"</div>";
            //Email domain is not accepted
            if(!strstr($accepted_emails,$email_domain))
                echo "<div class='alert-warning'>Email domain not recognized, accepted domains include:<br/><ul><li>yahoo.com</li><li>hotmail.com</li><li>aol.com</li><li>gmail.com</li><li>msn.com</li></ul></div>";
            //Date is invalid
            if( ( ($month == 4 || $month == 6 || $month == 9 || $month == 11 ) && $day > 30 ) || ( $month == 2 && $day > 28 ) || $day >31 || $month > 12 ||  $year < 1900 || $year > 2017 )
                echo "<div class='alert-warning'>This is an invalid date</div>";
            //Security question was not picked
            if(!$secureQuest)
                echo "<div class='alert-warning'>Please select a security question</div>";
            if(!$didRead)
                echo " <div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert'><span>&times;</span></button> Please check to see if you read the terms and agreements</div>";
            if($year > 2004 && $year <= 2017)
                echo"<div class='alert-warning'>You are too young to be using this product.</div>";

        }
    }
    //Main function
    if($isformSubmitted)
        runChecks();
    ?>  
    <!-- End PHP -->

    <!-- Start Container -->
    <div class="container">
        <!-- Spacing coulmn -->
        <div class='col-xs-4'></div>
        <!-- Start Main Column -->
        <div class='col-xs-8'>
            <h1>Registration </h1>
            <!-- Start Form -->
            <form method="post" style="margin:20px " id="form"> 
                <!-- Username-->
                <input type="text" name="name" id="name" value="" placeholder="Username"/><br />
                <!-- Password -->
                <input type="password" name="pword" id="pword" value="" placeholder="Password"/><br />
                <!-- Confirm password -->
                <input type="password" name="pword2" id="pword2" value="" placeholder="Confirm password"/><br />
                <!-- Email --> 
                <input type="text" name="email" id="email" value="" placeholder="Email"/><br />
                <!-- Confirm email -->
                <input type="text" name="email2" id="email2" value="" placeholder="Confirm email"/><br/>
                <p>Birthday:</p>
                <!-- Month -->
                <input type='number' name='month' id="month" value="" placeholder="Month" /><br/>
                <!-- Day -->
                <input type='number' name='day' id="day" value="" placeholder="Day" /><br/> 
                <!-- Year -->
                <input type='number' name='year' id="year" value="" placeholder="Year" /><br/>
                <br/>
                <!-- Security Question -->
                <select name='secureQuest' id='secureQuest' value="0" style='margin-left: -40px'>
                    <option value="0" disabled selected>Select a security question</option>
                    <option value='1'>What was the name of your first pet?</option>
                    <option value='2'>What is your mother's maiden name?</option>
                    <option value='3'>What was your first car?</option>
                    <option value='4'>Who is your favor actor/actress?</option>
                </select><br/>
                <br/>
                <!-- Security Answer -->
                <input type="text" name='secureAns' id="secureAns" value="" placeholder="Answer"/><br/>
                <br/>
                <!-- Terms & Agreement -->
                <p style='display: inline'>I have read the terms and agreements   </p><input type="checkbox" name='didRead' id='didRead'/><br/>
                <input type="submit"  value="Submit" id="submit" />
                <!-- Start JS Warnings -->
                <div id='jsWarnings'>
                    <div class='alert-danger' style='width: 270px' id = 'warn1'>1 Missing a field </div>
                    <div class='alert-danger' style='width: 270px' id = 'warn2'>2 Your emails do not match</div>
                    <div class='alert-danger'style='width: 270px' id = 'warn3'>3 This email is not at least 5 characters</div>
                    <div class='alert-danger'style='width: 270px' id = 'warn4'>4 Missing an "@"</div>
                    <div class='alert-danger'style='width: 270px' id = 'warn5'>5 Invalid Email</div>
                    <div class='alert-danger'style='width: 270px' id = 'warn6'>6 Username must be at least 6 characters</div>
                    <div class='alert-danger'style='width: 270px' id = 'warn7'>7 Passwords do not match</div>
                    <div class='alert-danger'style='width: 270px' id = 'warn8'>8 Password is not at least 4 characters</div>
                    <div class='alert-danger'style='width: 270px' id = 'warn9'>9 Can't have username in your password</div>
                    <div class='alert-danger' id='warn10'>10 Email domain not recognized, accepted domains include:<br/><ul><li>yahoo.com</li><li>hotmail.com</li><li>aol.com</li><li>gmail.com</li><li>msn.com</li></ul></div>
                    <div class='alert-danger' id='warn11'>11 This is an invalid date</div>
                    <div class='alert-danger' id='warn12'>12 Please select a security question</div>
                    <div class='alert alert-danger alert-dismissible' role='alert' id='warn13'><button type='button' class='close' data-dismiss='alert'><span>&times;</span></button>13 Please check to see if you read the terms and agreements</div>
                    <div class='alert-danger' id='warn14'>14 You are too young to be using this product.</div>
                </div>
                <!-- End JS Warnings -->
                </div>
            <!-- End Main Column -->
            </form>
        <!-- End Form -->
    </div>
    <!-- End Container --> 
</body>
</html>