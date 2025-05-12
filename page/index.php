<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTING</title>
    <link rel="stylesheet" href="assets/css/style-luckPage.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <div class="container">
        <h1>What will be your luck today?</h1>

        <?php
            //Declarations
            $colors = ["Red", "Blue", "Green", "Yellow", "Purple"];//Decides the lucky color of the user
            $luckyNumber = rand(1, 100); //Generates a random number from 1 to 100
            $randomIndex = rand(0, count($colors) - 1); //It generates random positionn from the array; 0 means the start of the array, count($colors) is for the number of elemnts in the array
            $luckyColor = $colors[$randomIndex]; //Generates a random color from the array using the $randomIndex
            $luckyColorLower = strtolower($luckyColor);
            $fortuneCookies = [
                "All your wishes will come true in the next 2 hours",
                "You will reunite with someone from the past",
                "Money will no longer a problem for you",
                "Rain of fortunes will come upon you",
                "Things are best to let go of before its too late"
            ];
            $luckyCount = 5;

            echo "<p>Your lucky number is: <span class='color-number'>$luckyNumber</span></p>";

            echo "<p>Your lucky color is <span class = 'color-$luckyColorLower'>$luckyColor</span></p>";


            //Loop
            echo "<p>Fortune Cookie says: </p>";
            echo"<ul>";
            for($i = 0; $i < $luckyCount; $i++ ){

                $message = "";
                
                if($luckyNumber <= 10){
                    $message = $fortuneCookies[0];
                }
                else if($luckyNumber <= 20){
                    $message = $fortuneCookies[1];
                }
                elseif($luckyNumber <= 30){
                    $message = $fortuneCookies[2];
                }
                elseif($luckyNumber <= 40){
                    $message = $fortuneCookies[3];
                }
                else{
                    $message = $fortuneCookies[4];
                }
            }
            
            echo "<p><span class = 'color-number'>$message</span></p>";
            echo "</ul>";
        ?>

        <img src="assets\img\mewo.gif">
        <div class="link">
            <a href= "index.php">Change your luck?</a>
        </div>
        <div class="return">
            <a href="https://localhost/AD-TASK1_MITO_TW22/index.php"><i class="fa-solid fa-circle-arrow-left"></i></a>
        </div>
    </div>
</body>
</html>