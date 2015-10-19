<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php
    $myAge =15;
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
    $wantedGood = "mugs";

    switch ($wantedGood) {
        case "mugs":
            echo "You have to be 18 to buy mugs";
            break;
        case "sausageRoll":
            echo "You have to be 21 to buy sausage rolls";
            break;
        case "specs":
            echo "You have to be 16 to buy specs";
            break;
        default:
            echo "Nothing set";
    }

    $provisionedActivities = array("Specs", "Drugs", "Rock", "Roll", "Mugs");
    foreach($provisionedActivities as $x){
        if($x == "Mugs"){
            $provisionedActivities[$x]['value']="hugs";
        }
        print "<p>$x</p>";
    }

    ?>


</p>
</body>
</html>
