<!DOCTYPE html>
<title>Welcome!</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



</head>

<body>
   <?php session_start(); ?>
    <div class='jumbotron'>
        <div class='text-center'>
            <h1>Welcome <?php echo $_SESSION['name'];?></h1>
        </div>
    </div>
    <div class='container'>
        <div class='col-xs-2'></div>
        <div class='well' class='col-xs-8'>
            <div class='text-center'>
                <p> Would you like for your account to be remembered?</p>
                <select>
                    <option>Yes</option>
                    <option>No</option>
                </select>
            
            </div>
        </div>
    </div>
</body>
</html>