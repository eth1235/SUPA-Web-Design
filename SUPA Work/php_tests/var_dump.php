<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
    <head>
        <title>untitled</title>
    </head>
    <body>
        <pre>
        <?php 
        $foo = "yo yo";
        $bool = TRUE;
        $int = 4;
        $float = 3.14;
        $array = [$foo, $bool, $int, $float];
        var_dump($array);
        ?><br/>
        <br/>
        <?php var_dump($_SERVER); ?>
        </pre>
        <?php 
        echo "<br/> {$_SERVER["HTTP_HOST"]} is the hostname";
        ?>
        <pre>
        <?php 
        //$_GET starts empty, add with adding to the url (ex: ...php?a=33&ryan=666) Everyting is considered a string
        //We'l also use $_SESSION and $_POST
        var_dump($_GET);
        ?>
        </pre>
    </body>
</html>
