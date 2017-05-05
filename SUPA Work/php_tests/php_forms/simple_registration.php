<!DOCTYPE html>
<title>Blank Form </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--Javascript-->
<script> 
    $(document).ready(function(){
        //Hides javascrpit warnings
        $('#warn1').hide();
        $('#warn2').hide();
        $('#warn3').hide();
        $('#warn4').hide();
        $('#warn5').hide();
        $('#warn6').hide();
        $('#warn7').hide();
        $('#warn8').hide();
        $('#warn9').hide();
        //Booleans
        var formOk = true;
        //Strings
        var uName = "";
        var pword1 = "";
        var pword2 = "";
        var email1 = "";
        var email2 = "";
        //Checks if form can submit
        $("#form").submit(function(){
            formOk = true;
            uName = $("#name").val();
            pword1 = $("#pword").val();
            pword2 = $("#pword2").val();
            email1 = $("#email").val();
            email2 = $("#email2").val();
            //Checks if variables are defined 
            if( uName === "" || pword1 === "" || pword2 === "" || email1 === "" || email2 === "" ){
                $('#warn1').show();
                formOk = false;
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
            if( email1.length <= 5){
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
            //Checks if password is more than
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
            if(formOk == false){
                event.preventDefault();
                alert("Form not submitted");
            }else{
                alert( "Form submitted" );
            }
        });
    });
</script> 
</head>

<body>
    <h1>Registration </h1>
    <?php
    $uName = "";
    $pWord1 = "";
    $pWord2 = "";
    $email1 = "";
    $email2 = "";

    //Functions
    //When form is submitted
    function submitClick(){
        global $uName, $pWord1, $pWord2, $email1, $email2;
        $uName = trim($_POST["name"]);
        $pWord1 = trim($_POST["pword"]);
        $pWord2 = trim($_POST["pword2"]);
        $email1 = trim($_POST["email"]);
        $email2 = trim($_POST["email2"]);
    }
    //Are variables defined
    function areDefined(){
        global $uName, $pWord1, $pWord2, $email1, $email2;
        if( !empty($uName) && !empty($pWord1) && !empty($pWord2) && !empty($email1) && !empty($email2) ){
            return true;
        }else{
            echo "<div class='alert-danger' style='width: 270px'>Missing a field!</div>";
            return false;
        }
    }
    //Email validation
    function checkEmail(){
        global $email1 , $email2;
        if($email1 !== $email2){
            echo "<div class='alert-danger' style='width: 270px'>Your emails do not match</div>";
        }
        if(strlen($email1) < 5 ){
            echo "<div class='alert-danger'style='height: 20px; width: 270px'>This email is not longer than 5 characters</div>";
        }
        $atPosition = strpos($email1 , "@");
        $dotPosition = strrpos($email1 , ".");
        if( $atPosition == false){
            echo "<div class='alert-danger'style='width: 270px'>Missing an \"@\"</div>";
        }
        if ($atPosition > $dotPosition){
            echo "<div class='alert-danger'style='width: 270px'>Invalid Email</div>";
        }
    }
    function check_UName_Pword(){
        //Makes sure username is at least 6 characters
        global $uName, $pWord1, $pWord2;
        if(strlen($uName) < 5){
            echo "<div class='alert-danger'style='width: 270px; display: none'>Username must be at least 6 characters</div>";
        }
        //Makes sure passwords are at least 5 characters and match
        if(strlen($pWord1) < 4){
            echo "<div class='alert-danger'style='width: 270px'>Passwords is not longer than 5 characters </div>";
        }
        if($pWord1 !== $pWord2){
            echo "<div class='alert-danger'style='width: 270px; display: none'>Passwords do not match</div>";
        }
        //Makes sure username is not in password
        if(strstr($pWord1,$uName)){
            echo "<div class='alert-danger'style='width: 270px; display: none'>Can't have username in your password</div>";
        }
    }

    ?>    
    <form method="post" style="margin:20px " id="form"> 

        <input type="text" name="name" id="name" value="" placeholder="Enter your username"/><br />
        <input type="password" name="pword" id="pword" value="" placeholder="Enter your password"/><br />
        <input type="password" name="pword2" id="pword2" value="" placeholder="Confirm your password"/><br />
        <input type="text" name="email" id="email" value="" placeholder="Enter your email address"/><br />
        <input type="text" name="email2" id="email2" value="" placeholder="Confirm your email address"/><br/>
        <input type="submit"  value="Submit" id="submit" />
        <div id='warnings'>
            <div class='alert-danger' style='width: 270px' id = 'warn1'>Missing a field </div>
            <div class='alert-danger' style='width: 270px' id = 'warn2'>Your emails do not match</div>
            <div class='alert-danger'style='width: 270px' id = 'warn3'>This email is not at least 5 characters</div>
            <div class='alert-danger'style='width: 270px' id = 'warn4'>Missing an "@"</div>
            <div class='alert-danger'style='width: 270px' id = 'warn5'>Invalid Email</div>
            <div class='alert-danger'style='width: 270px' id = 'warn6'>Username must be at least 6 characters</div>
            <div class='alert-danger'style='width: 270px' id = 'warn7'>Passwords do not match</div>
            <div class='alert-danger'style='width: 270px' id = 'warn8'>Password is not at least 4 characters</div>
            <div class='alert-danger'style='width: 270px' id = 'warn9'>Can't have username in your password</div>
            
        </div>
    </form>
    <?php  
    //Main function
    $isformSubmitted = isset($_POST["name"]);
    if($isformSubmitted){
        submitClick();
        if(areDefined()){
            checkEmail();
            check_UName_Pword();
        }
    }
    ?>
</body>
</html>