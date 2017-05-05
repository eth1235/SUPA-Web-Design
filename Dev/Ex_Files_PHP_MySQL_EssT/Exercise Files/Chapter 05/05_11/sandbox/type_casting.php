<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Type Juggling and Type Casting</title>
	</head>
	<body>
    Type Juggling<br/>
    <?php $count = "2";?><br/>
    Type: <?php echo gettype($count); ?><br/>
    <?php $count += 3;?><br/>
    Type: <?php echo gettype($count); ?><br/>
    
    <?php $cats = "I have " . $count ." cats."; ?><br/>
    Cats: <?php echo gettype($cats);?><br/>
    <br/>
    Type Casting<br/>
    <?php settype($count,"integer");?>
    Count: <?php echo gettype($count);?><br/>
    
    <?php $count2 = (string) $count;?>
    Count: <?php echo gettype($count); ?><br/>
    Count2: <?php echo gettype($count2); ?><br/>
    <br/>
    <?php $test1 = 3;?>
    <?php $test2 = 3;?>
    <?php settype($test1, "string")?>
    <?php (string) $test2; ?>
    test1: <?php echo gettype($test1);?><br/>
    test2: <?php echo gettype($test2);?><br/>
    
    
    
	</body>
</html>
