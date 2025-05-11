<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTING</title>
</head>
<body>
    <h1>What will be your luck today?</h1>

    <?php
        //Declarations
        $colors = ["Red, Blue", "Green", "Yellow", "Purple"];//Decides the lucky color of the user
        $luckyNumber = rand(1, 100); //Generates a random number from 1 to 100
        $randomIndex = rand(0, count($colors) - 1); //It generates random positionn from the array; 0 means the start of the array, count($colors) is for the number of elemnts in the array
        $luckyColor = $colors[$randomIndex]; //Generates a random color from the array using the $randomIndex

        echo "<p>Your lucky number is: $luckyNumber</p>";
        echo "<p>Your lucky color is $luckyColor</p>";

        //Conditional
        if($luckyNumber > 50){
            echo "Today is your lucky day, love!";
        }
        else{
            echo "Sorry love, not today but soon!";
        }

        //Loop
        echo "<p>Look at all the possible colors: </p>";

        foreach($colors as $color){
            echo "<li>$color</li>";
        }

        echo "</ul>";

    ?>
</body>
</html>