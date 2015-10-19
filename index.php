<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $myAge =122;
    $personName = "Josh";

    if(($myAge >16) and ($myAge <=18)){
        print "You can buy specs";
    }
    elseif (($myAge >18) and ($myAge <=21)){
        print "You can buy mugs and specs";
    }
    elseif ($myAge >21){
        print "You can buy specs, mugs and sausage rolls";
    }
    else{
        print "Sorry, you can't buy anything";
    }
    //echo "Hello World php";
    ?>
</p>
</body>
</html>
